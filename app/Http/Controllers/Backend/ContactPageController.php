<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Meta;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactPageController extends Controller
{
    public function create()
    {
        $contactPageData = Meta::where('key', 'contactPage.title')->get(['value_en']);
        return view('backend.pages.contact_page')->with('contactPageData', $contactPageData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();

            $data = $request->except('_token');
            $meta = Meta::firstOrNew(['key' => 'contactPage.title']);
            $value_en = json_encode($data);
            $meta->fill([
                'title_en' => 'Contact Page Title',
                'title_jp' => 'Contact Page Title (JP)',
                'value_en' => $value_en,
                'type' => 'json'
            ])->save();
            DB::commit();
            return redirect()->route('contact_page.index')->with('success', 'Home Banner Update Successfully!!!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Failed to update Home Banner. Please try again.');
        }
    }



}
