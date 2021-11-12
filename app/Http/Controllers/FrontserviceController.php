<?php

namespace App\Http\Controllers;

use App\Frontservice;
use Illuminate\Http\Request;

class FrontserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.fontservice.index')->with('services',Frontservice::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDashboard.fontservice.create');
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
        $sevice = new Frontservice();
        $sevice->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        $sevice->image = $request->image->store('sliders');
        $sevice->desc = ['en' => $request->desc_ar, 'ar' => $request->desc_en];
        $sevice->save();
        return redirect()->route('frontservice.index')->with(['success'=>'تمت الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Frontservice  $frontservice
     * @return \Illuminate\Http\Response
     */
    public function show(Frontservice $frontservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Frontservice  $frontservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontservice $frontservice)
    {
        return view('AdminDashboard.fontservice.edit')->with('service',$frontservice);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Frontservice  $frontservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $sevice=   Frontservice::find($id); 
        $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
            'desc_ar'=>'required',
            'desc_en'=>'required',
        ]);
        $sevice->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        if($request->image != null){
            $sevice->image = $request->image->store('sliders');
        }
        $sevice->desc = ['en' => $request->desc_ar, 'ar' => $request->desc_en];
        $sevice->save();
        return redirect()->route('frontservice.index')->with(['success'=>'تمت التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Frontservice  $frontservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontservice $frontservice)
    {
        $frontservice->delete();
        return redirect()->route('frontservice.index')->with(['success'=>'تم الحذف  بنجاح']);
    }
}
