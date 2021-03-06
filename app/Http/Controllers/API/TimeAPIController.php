<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTimeAPIRequest;
use App\Http\Requests\API\UpdateTimeAPIRequest;
use App\Models\Time;
use App\Repositories\TimeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class TimeController
 * @package App\Http\Controllers\API
 */

class TimeAPIController extends AppBaseController
{
    /** @var  TimeRepository */
    private $timeRepository;

    public function __construct(TimeRepository $timeRepo)
    {
        $this->timeRepository = $timeRepo;
    }

    /**
     * Display a listing of the Time.
     * GET|HEAD /times
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->timeRepository->pushCriteria(new RequestCriteria($request));
        $this->timeRepository->pushCriteria(new LimitOffsetCriteria($request));
        $times = $this->timeRepository->all();

        return $this->sendResponse($times->toArray(), 'Times retrieved successfully');
    }

    /**
     * Store a newly created Time in storage.
     * POST /times
     *
     * @param CreateTimeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTimeAPIRequest $request)
    {
        $input = $request->all();

        $times = $this->timeRepository->create($input);

        return $this->sendResponse($times->toArray(), 'Time saved successfully');
    }

    /**
     * Display the specified Time.
     * GET|HEAD /times/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Time $time */
        $time = $this->timeRepository->findWithoutFail($id);

        if (empty($time)) {
            return $this->sendError('Time not found');
        }

        return $this->sendResponse($time->toArray(), 'Time retrieved successfully');
    }

    /**
     * Update the specified Time in storage.
     * PUT/PATCH /times/{id}
     *
     * @param  int $id
     * @param UpdateTimeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTimeAPIRequest $request)
    {
        $input = $request->all();

        /** @var Time $time */
        $time = $this->timeRepository->findWithoutFail($id);

        if (empty($time)) {
            return $this->sendError('Time not found');
        }

        $time = $this->timeRepository->update($input, $id);

        return $this->sendResponse($time->toArray(), 'Time updated successfully');
    }

    /**
     * Remove the specified Time from storage.
     * DELETE /times/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Time $time */
        $time = $this->timeRepository->findWithoutFail($id);

        if (empty($time)) {
            return $this->sendError('Time not found');
        }

        $time->delete();

        return $this->sendResponse($id, 'Time deleted successfully');
    }
}
