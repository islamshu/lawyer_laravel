<?php

namespace App\Http\Controllers;

use App\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.rate.index')->with('rates',Rate::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDashboard.rate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
            'image'=>'required',
            'desc_ar'=>'required',
            'desc_en'=>'required',
        ]);
        $sevice = new Rate();
        $sevice->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        $sevice->image = $request->image->store('rates');
        $sevice->desc = ['en' => $request->desc_ar, 'ar' => $request->desc_en];
        $sevice->save();
        return redirect()->route('rate.index')->with(['success'=>'تمت الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function edit(Rate $rate)
    {
        return view('AdminDashboard.rate.edit')->with('rate',$rate);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $sevice=   Rate::find($id); 
        $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
            'desc_ar'=>'required',
            'desc_en'=>'required',
        ]);
        $sevice->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        if($request->image != null){
            $sevice->image = $request->image->store('rats');
        }
        $sevice->desc = ['en' => $request->desc_ar, 'ar' => $request->desc_en];
        $sevice->save();
        return redirect()->route('rate.index')->with(['success'=>'تمت التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rate  $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rate $rate)
    {
        $rate->delete();
        return redirect()->route('rate.index')->with(['success'=>'تم الحذف  بنجاح']);
    }
}
