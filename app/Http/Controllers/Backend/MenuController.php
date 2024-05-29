<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $desiredMenu = '';
        $menuItems = '';
        if (isset($_GET['id']) && $_GET['id'] != 'new') {
            $id = $_GET['id'];
            $desiredMenu = Menu::where('id', $id)->first();
            if($desiredMenu!=null) $menuItems = MenuItem::where('menu_id', $desiredMenu->id);
            
        }
        $pages = [
            [
                'title_en' => 'Courses',
                'title_jp' => 'Courses JP', // You can add Japanese titles as needed
                'slug' => '/courses'
            ],
            [
                'title_en' => 'Events',
                'title_jp' => 'Events JP',
                'slug' => '/events'
            ],
            [
                'title_en' => 'Services',
                'title_jp' => 'Services JP',
                'slug' => '/services'
            ],
            [
                'title_en' => 'About Hayabusa',
                'title_jp' => 'About Hayabusa JP',
                'slug' => '/about-us'
            ],
            [
                'title_en' => 'Our Affiliated College',
                'title_jp' => 'Our Affiliated College JP',
                'slug' => '/our-client'
            ],
            [
                'title_en' => 'About Nepal',
                'title_jp' => 'About Nepal JP',
                'slug' => '/nepal'
            ],
            [
                'title_en' => 'About Japan',
                'title_jp' => 'About Japan JP',
                'slug' => '/japan/about'
            ],
            [
                'title_en' => 'Study In Japan',
                'title_jp' => 'Study In Japan JP',
                'slug' => '/japan/study'
            ],
            [
                'title_en' => 'Work In Japan',
                'title_jp' => 'Work In Japan JP',
                'slug' => '/japan/work'
            ],
            [
                'title_en' => 'Blogs',
                'title_jp' => 'Blogs JP',
                'slug' => '/blogs'
            ]
        ];
        $menuOptions = [
            'pages' => $pages,
            'blogs' => Blog::get(['title_en', 'title_jp', 'slug']),
            'events' => Event::get(['title_en', 'title_jp', 'slug'])
        ];
        $menus = Menu::all();
        return view('backend.menus.add', compact('menuOptions', 'menus', 'desiredMenu', 'menuItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if (menu::create($data)) {
            $newdata = menu::orderby('id', 'DESC')->first();
            Session::flash('success', 'Menu saved successfully !');
            return redirect("system/manage-menus?id=$newdata->id");
        } else {
            return redirect()->back()->with('error', 'Failed to save menu !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeMenuItems(Request $request)
    {
        try {
            $menuItemsData = $request->all();
            // Loop through the received menu items data and store each one
            foreach ($menuItemsData['menu_items'] as $menuItemData) {
                if ($menuItemData !== null) {
                    $menuItem = MenuItem::create([
                        'title_en' => $menuItemData['title_en'],
                        'title_jp' => $menuItemData['title_jp'],
                        'slug' => $menuItemData['slug'],
                        'type' => 'link',
                        'target' => '_self',
                        'menu_id' => $menuItemsData['menu_id'],
                    ]);
                }
            }
            return response()->json(['message' => 'Menu items stored successfully','id'=>$menuItem->id], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to store menu items', 'message' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateMenuItemOrder(Request $request)
    {

        $items = $request->list;
        $order = 0;
        foreach ($items as $item) {
            if (is_array($item) && array_key_exists("parent_id", $item)) {
                MenuItem::where('id', $item['id'])->update([
                    'parent_id' => $item['parent_id'],
                    'order' => $order,
                ]);
            } else {
                MenuItem::where('id', $item['id'])->update([
                    'parent_id' => null,
                    'order' => $order,
                ]);
            }
            $order++;
        }

        $request->session()->flash('success', 'Menu item successfully arranged.');

        return response()->json(['status' => true]);
    }
}
