<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateManagerRequest;
use App\Http\Requests\UpdateManagerRequest;
use App\Repositories\ManagerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ManagerController extends AppBaseController
{
    /** @var  ManagerRepository */
    private $managerRepository;

    public function __construct(ManagerRepository $managerRepo)
    {
        $this->managerRepository = $managerRepo;
    }

    /**
     * Display a listing of the Manager.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->managerRepository->pushCriteria(new RequestCriteria($request));
        $managers = $this->managerRepository->all();
        return view('managers.index')->with('managers', $managers);
    }

    /**
     * Show the form for creating a new Manager.
     *
     * @return Response
     */
    public function create()
    {
        return view('managers.create');
    }

    /**
     * Store a newly created Manager in storage.
     *
     * @param CreateManagerRequest $request
     *
     * @return Response
     */
    public function store(CreateManagerRequest $request)
    {
        $input = $request->all();

        $manager = $this->managerRepository->create($input);

        Flash::success('Manager saved successfully.');

        return redirect(route('managers.index'));
    }

    /**
     * Display the specified Manager.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $manager = $this->managerRepository->findWithoutFail($id);

        if (empty($manager)) {
            Flash::error('Manager not found');

            return redirect(route('managers.index'));
        }

        return view('managers.show')->with('manager', $manager);
    }

    /**
     * Show the form for editing the specified Manager.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $manager = $this->managerRepository->findWithoutFail($id);

        if (empty($manager)) {
            Flash::error('Manager not found');

            return redirect(route('managers.index'));
        }

        return view('managers.edit')->with('manager', $manager);
    }

    /**
     * Update the specified Manager in storage.
     *
     * @param  int              $id
     * @param UpdateManagerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateManagerRequest $request)
    {
        $manager = $this->managerRepository->findWithoutFail($id);

        if (empty($manager)) {
            Flash::error('Manager not found');

            return redirect(route('managers.index'));
        }

        $manager = $this->managerRepository->update($request->all(), $id);

        Flash::success('Manager updated successfully.');

        return redirect(route('managers.index'));
    }

    /**
     * Remove the specified Manager from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $manager = $this->managerRepository->findWithoutFail($id);

        if (empty($manager)) {
            Flash::error('Manager not found');

            return redirect(route('managers.index'));
        }

        $this->managerRepository->delete($id);

        Flash::success('Manager deleted successfully.');

        return redirect(route('managers.index'));
    }
}
