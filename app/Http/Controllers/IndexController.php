<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Repositories\TeamRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\AbroadRepository;
use App\Repositories\FaqRepository;
use App\Repositories\AboutusRepository;
use App\Repositories\CourseRepository;

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

            return redirect(route('/'));
        }
        return view('frontend.staff')->with('team', $team);
    }

    public function services(ServiceRepository $serviceRepo){
        $service = $serviceRepo->findWithoutFail(1);

        if (empty($service)) {
            Flash::error('Services not found');

            return redirect('/');
        }
        return view('frontend.services')->with('services', $service);
    }

    public function studyabroad(AbroadRepository $abroadRepo){
        $abroad = $abroadRepo->findWithoutFail(1);

        if (empty($abroad)) {
            Flash::error('Services not found');

            return redirect('/');
        }
        return view('frontend.studyabroad')->with('abroad', $abroad);
    }

    public function faq(FaqRepository $faqRepo){
        $faq = $faqRepo->findWithoutFail(1);

        if (empty($faq)) {
            Flash::error('Services not found');

            return redirect('/');
        }
        return view('frontend.faq')->with('faq', $faq);
    }

    public function aboutus(AboutusRepository $aboutusRepo){
        $aboutus = $aboutusRepo->findWithoutFail(1);

        if (empty($aboutus)) {
            Flash::error('Services not found');

            return redirect('/');
        }
        return view('frontend.aboutus')->with('aboutus', $aboutus);
    }

    public function courses(CourseRepository $courseRepo){
        $course = $courseRepo->findWithoutFail(1);

        if (empty($course)) {
            Flash::error('Services not found');

            return redirect('/');
        }
        return view('frontend.courses')->with('course', $course);
    }

    
}
