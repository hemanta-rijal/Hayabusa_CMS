<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Meta;
use App\Traits\ImageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageBannerController extends Controller
{
    use ImageTrait;
    public string $image_path = 'uploads/images/banner';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\View
     */
    public function create()
    {
        $homeBanner = Meta::where('key', 'homeBanner.title')->get(['value_en']);
        return view('backend.banners.homePageBanner')->with('homeBanner', $homeBanner);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    try {
        DB::beginTransaction();
        
        $imageFile = '';
        $data = $request->except('_token');
        $meta = Meta::firstOrNew(['key' => 'homeBanner.title']);
        if ($request->hasFile('image')) {
            $imageFile = $this->saveOriginalImage($request->image);
        } else {
            if ($meta->exists) {
                $value_en = json_decode($meta->value_en);
                $imageFile = $value_en->image ?? '';
            }
        }
        $data['image'] = $imageFile;
        $value_en = json_encode($data);
        $meta->fill([
            'title_en' => 'Home Page Title',
            'title_jp' => 'Home Page Title (JP)',
            'value_en' => $value_en,
            'type' => 'json'
        ])->save();
        DB::commit();
        return redirect()->route('home-banner')->with('success', 'Home Banner Update Successfully!!!');
    } catch (Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Failed to update Home Banner. Please try again.');
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
}
