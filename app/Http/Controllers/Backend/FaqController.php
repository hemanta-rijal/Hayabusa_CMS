<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;
use App\Models\Faq;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $faqs = Faq::orderBy('position', 'ASC')->get();
        return view('backend.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $faq = new Faq();
        return view('backend.faqs.add', compact('faq'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FaqRequest $request
     * @return RedirectResponse
     */
    public function store(FaqRequest $request): RedirectResponse
    {
        Faq::create($request->validated());
        return redirect()->route('faqs.index')->with('success', 'Faq Added Successfully!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Faq $faq
     * @return View|Factory|Application
     */
    public function edit(Faq $faq): View|Factory|Application
    {
        return view('backend.faqs.edit', compact('faq'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param FaqRequest $request
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function update(FaqRequest $request, Faq $faq): RedirectResponse
    {
        $faq->update($request->validated());
        return redirect()->route('faqs.index')->with('success', 'Faq Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function destroy(Faq $faq): RedirectResponse
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'Faq Deleted Successfully!!!');
    }
}
