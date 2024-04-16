<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubCourseRequest;
use App\Models\Course;
use App\Models\SubCourse;
use App\Traits\ImageTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubCourseController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/sub_course';

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $subCourses = SubCourse::with('course')->get();
        return view('backend.subCourses.index', compact('subCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $subCourse = new SubCourse();
        $courses = Course::all();
        return view('backend.subCourses.add', compact('subCourse', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubCourseRequest $request
     * @return RedirectResponse
     */
    public function store(SubCourseRequest $request): RedirectResponse
    {
        $image = $this->saveOriginalImage($request->image);
        SubCourse::create($request->validated() + [
                'image' => $image
            ]);

        return redirect()->route('subCourses.index')->with('success', 'Sub Course Added Successfully!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SubCourse $subCourse
     * @return View|Factory|Application
     */
    public function edit(SubCourse $subCourse): View|Factory|Application
    {
        $courses = Course::all();
        return view('backend.subCourses.edit', compact('subCourse', 'courses'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param SubCourseRequest $request
     * @param SubCourse $subCourse
     * @return RedirectResponse
     */
    public function update(SubCourseRequest $request, SubCourse $subCourse): RedirectResponse
    {
        $image = $subCourse->image;
        if (isset($request->image)) {
            $this->deleteImage($this->image_path . '/' . $subCourse->image);
            $image = $this->saveOriginalImage($request->image);
        }
        $subCourse->update($request->validated() + [
                'image' => $image
            ]);

        return redirect()->route('subCourses.index')->with('success', 'Sub Course Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubCourse $subCourse
     * @return RedirectResponse
     */
    public function destroy(SubCourse $subCourse): RedirectResponse
    {
        $this->deleteImage($this->image_path . '/' . $subCourse->image);
        $subCourse->delete();

        return redirect()->route('subCourses.index')->with('success', 'Sub Course Deleted Successfully!!!');
    }
}
