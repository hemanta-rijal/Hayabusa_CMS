<?php

namespace App\Http\Controllers\Backend;

use App\Models\Models\CTA;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCTARequest;
use App\Traits\ImageTrait;
use App\Http\Requests\UpdateCTARequest;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Throwable;

class CTAController extends Controller
{

    use ImageTrait;

    public string $image_path = 'uploads/images/cta';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ctas = CTA::orderBy('created_at', 'ASC')->get();
        return view('backend.ctas.index', compact('ctas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ctas.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCTARequest  $request
     * @return RedirectResponse
     */
    public function store(StoreCTARequest $request): RedirectResponse
    {
        try {
            DB::beginTransaction();
            $imageFile = $this->saveOriginalImage($request->image);
            // Save the original image and get the filename
            $data = $request->validated();
            $data['image'] = $imageFile;

            // Create CTA with validated data and uploaded image
            CTA::create($data);
            DB::commit();
            return redirect()->route('ctas.index')->with('success', 'CTA Added Successfully!!!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to add CTA. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Models\CTA  $cTA
     * @return \Illuminate\Http\Response
     */
    public function show(CTA $cTA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return Application|Factory|View
     */
    public function edit(CTA $cta): View|Factory|Application
    {
        return view('backend.ctas.edit', compact('cta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCTARequest  $request
     * @param  \App\Models\Models\CTA  $cTA
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(UpdateCTARequest $request, CTA $cta): RedirectResponse
    {
        try {
            DB::beginTransaction();

            $image = $cta->image;
            $data = $request->validated();

            if ($request->hasFile('image')) {
                // Delete the old image if a new image is uploaded
                $this->deleteImage($this->image_path . '/' . $image);
                $image = $this->saveOriginalImage($request->file('image'));
                $data['image'] = $image;
            }

            $cta->update($data);
            DB::commit();
            return redirect()->route('ctas.index')->with('success', 'CTA Updated Successfully!!!');
        } catch (Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update CTA. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models\CTA  $cTA
     * @return \Illuminate\Http\Response
     */
    public function destroy(CTA $cTA)
    {
        $this->deleteImage($this->image_path . '/' . $cTA->image);
        $cTA->delete();

        return redirect()->route('ctas.index')->with('success', 'Client Deleted Successfully!!!');
    }
}
