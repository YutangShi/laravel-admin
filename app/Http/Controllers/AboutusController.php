<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAboutusRequest;
use App\Http\Requests\UpdateAboutusRequest;
use App\Repositories\AboutusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AboutusController extends AppBaseController
{
    /** @var  AboutusRepository */
    private $aboutusRepository;

    public function __construct(AboutusRepository $aboutusRepo)
    {
        $this->aboutusRepository = $aboutusRepo;
    }

    /**
     * Display a listing of the Aboutus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->aboutusRepository->pushCriteria(new RequestCriteria($request));
        $aboutuses = $this->aboutusRepository->all();

        return view('aboutuses.index')
            ->with('aboutuses', $aboutuses);
    }

    /**
     * Show the form for creating a new Aboutus.
     *
     * @return Response
     */
    public function create()
    {
        return view('aboutuses.create');
    }

    /**
     * Store a newly created Aboutus in storage.
     *
     * @param CreateAboutusRequest $request
     *
     * @return Response
     */
    public function store(CreateAboutusRequest $request)
    {
        $input = $request->all();

        $aboutus = $this->aboutusRepository->create($input);

        Flash::success('Aboutus saved successfully.');

        return redirect(route('aboutuses.index'));
    }

    /**
     * Display the specified Aboutus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aboutus = $this->aboutusRepository->findWithoutFail($id);

        if (empty($aboutus)) {
            Flash::error('Aboutus not found');

            return redirect(route('aboutuses.index'));
        }

        return view('aboutuses.show')->with('aboutus', $aboutus);
    }

    /**
     * Show the form for editing the specified Aboutus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aboutus = $this->aboutusRepository->findWithoutFail($id);

        if (empty($aboutus)) {
            Flash::error('Aboutus not found');

            return redirect(route('aboutuses.index'));
        }

        return view('aboutuses.edit')->with('aboutus', $aboutus);
    }

    /**
     * Update the specified Aboutus in storage.
     *
     * @param  int              $id
     * @param UpdateAboutusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAboutusRequest $request)
    {
        $aboutus = $this->aboutusRepository->findWithoutFail($id);

        if (empty($aboutus)) {
            Flash::error('Aboutus not found');

            return redirect(route('aboutuses.index'));
        }

        $aboutus = $this->aboutusRepository->update($request->all(), $id);

        Flash::success('Aboutus updated successfully.');

        return redirect(route('aboutuses.index'));
    }

    /**
     * Remove the specified Aboutus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aboutus = $this->aboutusRepository->findWithoutFail($id);

        if (empty($aboutus)) {
            Flash::error('Aboutus not found');

            return redirect(route('aboutuses.index'));
        }

        $this->aboutusRepository->delete($id);

        Flash::success('Aboutus deleted successfully.');

        return redirect(route('aboutuses.index'));
    }
}
