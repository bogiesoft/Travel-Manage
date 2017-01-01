<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateTravelRequest;
use App\Http\Requests\UpdateTravelRequest;
use App\Repositories\TravelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TravelController extends AppBaseController
{
    /** @var  TravelRepository */
    private $travelRepository;

    public function __construct(TravelRepository $travelRepo)
    {
        $this->travelRepository = $travelRepo;
    }

    /**
     * Display a listing of the Travel.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->travelRepository->pushCriteria(new RequestCriteria($request));
        $travels = $this->travelRepository->all();

        return view('backend.travels.index')
            ->with('travels', $travels);
    }

    /**
     * Show the form for creating a new Travel.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.travels.create');
    }

    /**
     * Store a newly created Travel in storage.
     *
     * @param CreateTravelRequest $request
     *
     * @return Response
     */
    public function store(CreateTravelRequest $request)
    {
        $input = $request->all();

        $travel = $this->travelRepository->create($input);

        Flash::success('Travel saved successfully.');

        return redirect(route('travels.index'));
    }

    /**
     * Display the specified Travel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            Flash::error('Travel not found');

            return redirect(route('travels.index'));
        }

        return view('backend.travels.show')->with('travel', $travel);
    }

    /**
     * Show the form for editing the specified Travel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            Flash::error('Travel not found');

            return redirect(route('travels.index'));
        }

        return view('backend.travels.edit')->with('travel', $travel);
    }

    /**
     * Update the specified Travel in storage.
     *
     * @param  int              $id
     * @param UpdateTravelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTravelRequest $request)
    {
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            Flash::error('Travel not found');

            return redirect(route('travels.index'));
        }

        $travel = $this->travelRepository->update($request->all(), $id);

        Flash::success('Travel updated successfully.');

        return redirect(route('travels.index'));
    }

    /**
     * Remove the specified Travel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $travel = $this->travelRepository->findWithoutFail($id);

        if (empty($travel)) {
            Flash::error('Travel not found');

            return redirect(route('travels.index'));
        }

        $this->travelRepository->delete($id);

        Flash::success('Travel deleted successfully.');

        return redirect(route('travels.index'));
    }
}
