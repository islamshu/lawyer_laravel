<?php

namespace App\Http\Controllers;

use App\General;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.general.index')->with('general',General::first());
    }

  
    public function store(Request $request)
    {
        $general =General::first();
        $rules = [];
        $request_all = $request->except(['header_logo','footer_logo','icon']);
        foreach (config('translatable.locales') as $locale) {

            $rules += [$locale . '.title' => ['required']];
            $rules += [$locale . '.decription' => ['required']];

        }//end of for each
        if($request->header_logo){
            $request_all['header_logo'] = $request->header_logo->store('general');
        }
        if($request->footer_logo){
            $request_all['footer_logo'] = $request->footer_logo->store('general');
        }
        if($request->icon){
            $request_all['icon'] = $request->icon->store('general');
        }
        $request->validate($rules);  

        $general->update($request_all);
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, General $general)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
    }
}
