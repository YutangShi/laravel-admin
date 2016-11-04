<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Repositories\TeamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class IndexController extends AppBaseController
{

    /** @var  TeamRepository */
    private $teamRepository;

    public function __construct(TeamRepository $teamRepo)
    {
        $this->teamRepository = $teamRepo;
    }

    /**
     * Display a listing of the Team.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
    }

    public function staff(){
        $team = $this->teamRepository->findWithoutFail(1);

        if (empty($team)) {
            Flash::error('Team not found');

            return redirect(route('team.index'));
        }
        return view('frontend.staff')->with('team', $team);
    }

    public function services(){
        return view('frontend.services');
    }
}
