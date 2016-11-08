<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAbroadRequest;
use App\Http\Requests\UpdateAbroadRequest;
use App\Repositories\AbroadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AbroadController extends AppBaseController
{
    /** @var  AbroadRepository */
    private $abroadRepository;

    public function __construct(AbroadRepository $abroadRepo)
    {
        $this->abroadRepository = $abroadRepo;
    }

    /**
     * Display a listing of the Abroad.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->abroadRepository->pushCriteria(new RequestCriteria($request));
        $abroads = $this->abroadRepository->all();

        return view('abroads.index')
            ->with('abroads', $abroads);
    }

    /**
     * Show the form for creating a new Abroad.
     *
     * @return Response
     */
    public function create()
    {
        return view('abroads.create');
    }

    /**
     * Store a newly created Abroad in storage.
     *
     * @param CreateAbroadRequest $request
     *
     * @return Response
     */
    public function store(CreateAbroadRequest $request)
    {
        $input = $request->all();

        $abroad = $this->abroadRepository->create($input);

        Flash::success('Abroad saved successfully.');

        return redirect(route('abroads.index'));
    }

    /**
     * Display the specified Abroad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $abroad = $this->abroadRepository->findWithoutFail($id);

        if (empty($abroad)) {
            Flash::error('Abroad not found');

            return redirect(route('abroads.index'));
        }

        return view('abroads.show')->with('abroad', $abroad);
    }

    /**
     * Show the form for editing the specified Abroad.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $abroad = $this->abroadRepository->findWithoutFail($id);

        if (empty($abroad)) {
            Flash::error('Abroad not found');

            return redirect(route('abroads.index'));
        }

        return view('abroads.edit')->with('abroad', $abroad);
    }

    /**
     * Update the specified Abroad in storage.
     *
     * @param  int              $id
     * @param UpdateAbroadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAbroadRequest $request)
    {
        $abroad = $this->abroadRepository->findWithoutFail($id);

        if (empty($abroad)) {
            Flash::error('Abroad not found');

            return redirect(route('abroads.index'));
        }

        $abroad = $this->abroadRepository->update($request->all(), $id);

        Flash::success('Abroad updated successfully.');

        return redirect(route('abroads.index'));
    }

    /**
     * Remove the specified Abroad from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $abroad = $this->abroadRepository->findWithoutFail($id);

        if (empty($abroad)) {
            Flash::error('Abroad not found');

            return redirect(route('abroads.index'));
        }

        $this->abroadRepository->delete($id);

        Flash::success('Abroad deleted successfully.');

        return redirect(route('abroads.index'));
    }
}
