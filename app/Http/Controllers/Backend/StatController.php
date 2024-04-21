<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Meta;
use Illuminate\Http\Request;

class StatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stat = Meta::where('key', 'like', 'stat.%')->get();
        return view('backend.stat.index')->with('allStat', $stat);
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
        $requestData = $request->except('_token');

        foreach ($requestData['key'] as $index => $key) {
            // Find or create the Meta record based on the key
            $meta = Meta::updateOrCreate(
                ['key' => $key],
                [
                    'title_en' => $requestData['title_en'][$index],
                    'title_jp' => $requestData['title_jp'][$index],
                    'value_en' => $requestData['value_en'][$index],
                    'value_jp' => $requestData['value_jp'][$index],
                ]
            );
        }
        return redirect()->back()->with('success', 'Successfully updated Statistics');
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
