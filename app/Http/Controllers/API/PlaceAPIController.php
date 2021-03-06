<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePlaceAPIRequest;
use App\Http\Requests\API\UpdatePlaceAPIRequest;
use App\Models\Place;
use App\Repositories\PlaceRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PlaceController
 * @package App\Http\Controllers\API
 */

class PlaceAPIController extends AppBaseController
{
    /** @var  PlaceRepository */
    private $placeRepository;

    public function __construct(PlaceRepository $placeRepo)
    {
        $this->placeRepository = $placeRepo;
    }

    /**
     * Display a listing of the Place.
     * GET|HEAD /places
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->placeRepository->pushCriteria(new RequestCriteria($request));
        $this->placeRepository->pushCriteria(new LimitOffsetCriteria($request));
        $places = $this->placeRepository->all();

        return $this->sendResponse($places->toArray(), 'Places retrieved successfully');
    }

    /**
     * Store a newly created Place in storage.
     * POST /places
     *
     * @param CreatePlaceAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePlaceAPIRequest $request)
    {
        $input = $request->all();

        $places = $this->placeRepository->create($input);

        return $this->sendResponse($places->toArray(), 'Place saved successfully');
    }

    /**
     * Display the specified Place.
     * GET|HEAD /places/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Place $place */
        $place = $this->placeRepository->findWithoutFail($id);

        if (empty($place)) {
            return $this->sendError('Place not found');
        }

        return $this->sendResponse($place->toArray(), 'Place retrieved successfully');
    }

    /**
     * Update the specified Place in storage.
     * PUT/PATCH /places/{id}
     *
     * @param  int $id
     * @param UpdatePlaceAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlaceAPIRequest $request)
    {
        $input = $request->all();

        /** @var Place $place */
        $place = $this->placeRepository->findWithoutFail($id);

        if (empty($place)) {
            return $this->sendError('Place not found');
        }

        $place = $this->placeRepository->update($input, $id);

        return $this->sendResponse($place->toArray(), 'Place updated successfully');
    }

    /**
     * Remove the specified Place from storage.
     * DELETE /places/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Place $place */
        $place = $this->placeRepository->findWithoutFail($id);

        if (empty($place)) {
            return $this->sendError('Place not found');
        }

        $place->delete();

        return $this->sendResponse($id, 'Place deleted successfully');
    }
}
