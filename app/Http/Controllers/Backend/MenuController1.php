<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MenuController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $menus = Menu::with('parent:id,name')->get();
        return view('backend.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $parents = Menu::where('parent_id', null)->get();
        return view('backend.menu.create', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MenuRequest $request
     * @return RedirectResponse
     */
    public function store(MenuRequest $request)
    {
        $position = (int)Menu::max('position');
        $position = $position ? $position + 1 : 1;
        Menu::create($request->validated() + ['position' => $position]);
        return redirect()->route('menus.index')->with('success', 'Menu added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Menu $menu
     * @return Application|Factory|View
     */
    public function edit(Menu $menu)
    {
        $parents = Menu::where([
            ['parent_id', null],
            ['id' , '!=', $menu->id]
        ])->get();
        return view('backend.menu.edit', compact('parents', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MenuRequest $request
     * @param Menu $menu
     * @return RedirectResponse
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        $menu->update($request->validated());
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
