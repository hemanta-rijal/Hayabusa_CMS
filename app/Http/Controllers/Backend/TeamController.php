<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use App\Traits\ImageTrait;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TeamController extends Controller
{
    use ImageTrait;

    public string $image_path = 'uploads/images/team';

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View|Application
     */
    public function index(): Factory|View|Application
    {
        $teams = Team::orderBy('position', 'ASC')->get();
        return view('backend.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $team = new Team();
        return view('backend.teams.add', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TeamRequest $request
     * @return RedirectResponse
     */
    public function store(TeamRequest $request): RedirectResponse
    {
        $image = $this->saveOriginalImage($request->image);
        Team::create($request->validated() + [
                'image' => $image
            ]);

        return redirect()->route('teams.index')->with('success', 'Team Added Successfully!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Team $team
     * @return View|Factory|Application
     */
    public function edit(Team $team): View|Factory|Application
    {
        return view('backend.teams.edit', compact('team'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param TeamRequest $request
     * @param Team $team
     * @return RedirectResponse
     */
    public function update(TeamRequest $request, Team $team): RedirectResponse
    {
        $image = $team->image;
        if (isset($request->image)) {
            $this->deleteImage($this->image_path . '/' . $team->image);
            $image = $this->saveOriginalImage($request->image);
        }
        $team->update($request->validated() + [
                'image' => $image
            ]);

        return redirect()->route('teams.index')->with('success', 'Team Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Team $team
     * @return RedirectResponse
     */
    public function destroy(Team $team): RedirectResponse
    {
        $this->deleteImage($this->image_path . '/' . $team->image);
        $team->delete();

        return redirect()->route('teams.index')->with('success', 'Team Deleted Successfully!!!');
    }
}
