<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Repositories\FaqRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FaqController extends AppBaseController
{
    /** @var  FaqRepository */
    private $faqRepository;

    public function __construct(FaqRepository $faqRepo)
    {
        $this->faqRepository = $faqRepo;
    }

    /**
     * Display a listing of the Faq.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->faqRepository->pushCriteria(new RequestCriteria($request));
        $faqs = $this->faqRepository->all();

        return view('faqs.index')
            ->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new Faq.
     *
     * @return Response
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store a newly created Faq in storage.
     *
     * @param CreateFaqRequest $request
     *
     * @return Response
     */
    public function store(CreateFaqRequest $request)
    {
        $input = $request->all();

        $faq = $this->faqRepository->create($input);

        Flash::success('Faq saved successfully.');

        return redirect(route('faqs.index'));
    }

    /**
     * Display the specified Faq.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $faq = $this->faqRepository->findWithoutFail($id);

        if (empty($faq)) {
            Flash::error('Faq not found');

            return redirect(route('faqs.index'));
        }

        return view('faqs.show')->with('faq', $faq);
    }

    /**
     * Show the form for editing the specified Faq.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $faq = $this->faqRepository->findWithoutFail($id);

        if (empty($faq)) {
            Flash::error('Faq not found');

            return redirect(route('faqs.index'));
        }

        return view('faqs.edit')->with('faq', $faq);
    }

    /**
     * Update the specified Faq in storage.
     *
     * @param  int              $id
     * @param UpdateFaqRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaqRequest $request)
    {
        $faq = $this->faqRepository->findWithoutFail($id);

        if (empty($faq)) {
            Flash::error('Faq not found');

            return redirect(route('faqs.index'));
        }

        $faq = $this->faqRepository->update($request->all(), $id);

        Flash::success('Faq updated successfully.');

        return redirect(route('faqs.index'));
    }

    /**
     * Remove the specified Faq from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $faq = $this->faqRepository->findWithoutFail($id);

        if (empty($faq)) {
            Flash::error('Faq not found');

            return redirect(route('faqs.index'));
        }

        $this->faqRepository->delete($id);

        Flash::success('Faq deleted successfully.');

        return redirect(route('faqs.index'));
    }
}
