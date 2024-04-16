<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use App\Traits\ImageTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TestimonialController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/testimonial';

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $testimonials = Testimonial::orderByDesc('created_at')->get();
        return view('backend.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $testimonial = new Testimonial();
        return view('backend.testimonials.add', compact('testimonial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TestimonialRequest $request
     * @return RedirectResponse
     */
    public function store(TestimonialRequest $request): RedirectResponse
    {
        $extra = [];
        $image = $this->saveOriginalImage($request->image);
        $extra["image"] = $image;

        if ($request->has('youtube')) {
            $utilityController = new UtilityController();
            $result = $utilityController->getYoutubeEmbedUrl($request->youtube);

            if ($result['success']) {
                $url = $result['embedUrl'];
            } else {
                return redirect()->back()->withErrors(['youtube' => $result['error']])->withInput();
            }
            $extra["youtube"] = $url;
        }

        Testimonial::create($request->validated() + $extra);
        return redirect()->route('testimonials.index')->with('success', 'Testimonial Added Successfully!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Testimonial $testimonial
     * @return Application|Factory|View
     */
    public function edit(Testimonial $testimonial): View|Factory|Application
    {
        return view('backend.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TestimonialRequest $request
     * @param Testimonial $testimonial
     * @return RedirectResponse
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial): RedirectResponse
    {
        $image = $testimonial->image;
        if (isset($request->image)) {
            $this->deleteImage($this->image_path . '/' . $testimonial->image);
            $image = $this->saveOriginalImage($request->image);
        }

        $youtube = $testimonial->youtube;
        if (isset($request->youtube)) {
            if ($youtube != $request->youtube) {
                $utilityController = new UtilityController();
                $result = $utilityController->getYoutubeEmbedUrl($request->youtube);

                if ($result['success']) {
                    $youtube = $result['embedUrl'];
                } else {
                    return redirect()->back()->withErrors(['youtube' => $result['error']]);
                }
            }
        } else{
            $youtube = null;
        }

        $testimonial->update($request->validated() + [
                'image' => $image,
                'youtube' => $youtube
            ]);
        return redirect()->route('testimonials.index')->with('success', 'Testimonial Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Testimonial $testimonial
     * @return RedirectResponse
     */
    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $this->deleteImage($this->image_path . '/' . $testimonial->image);
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial Deleted Successfully!!!');
    }
}
