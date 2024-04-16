<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $courses = Course::orderBy('position', 'ASC')->get();
        return view('backend.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $course = new Course();
        return view('backend.courses.add', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CourseRequest $request
     * @return RedirectResponse
     */
    public function store(CourseRequest $request): RedirectResponse
    {
        Course::create($request->validated());
        return redirect()->route('courses.index')->with('success', 'Course Added Successfully!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Course $course
     * @return View|Factory|Application
     */
    public function edit(Course $course): View|Factory|Application
    {
        return view('backend.courses.edit', compact('course'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param CourseRequest $request
     * @param Course $course
     * @return RedirectResponse
     */
    public function update(CourseRequest $request, Course $course): RedirectResponse
    {
        $course->update($request->validated());
        return redirect()->route('courses.index')->with('success', 'Course Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Course $course
     * @return RedirectResponse
     */
    public function destroy(Course $course): RedirectResponse
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course Deleted Successfully!!!');
    }
}
