<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.sliders.index')->with('sliders',Slider::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDashboard.sliders.create');

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
        ]);
        $slider = new Slider();
        $slider->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        $slider->image = $request->image->store('sliders');
        $slider->button_text = ['en' => $request->btn_en, 'ar' => $request->btn_ar];
        $slider->url = $request->url;
        $slider->save();
        return redirect()->route('sliders.index')->with(['success'=>'تمت الاضافة بنجاح']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider=Slider::find($id);
        return view('AdminDashboard.sliders.edit')->with('slider',$slider);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
            // 'image'=>'required',
        ]);
        $slider=Slider::find($id);
        $slider->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        if($request->image != null){
            $slider->image = $request->image->store('sliders');
        }
        $slider->button_text = ['en' => $request->btn_en, 'ar' => $request->btn_ar];
        $slider->url = $request->url;
        $slider->save();
        return redirect()->route('sliders.index')->with(['success'=>'تمت التعديل بنجاح']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('sliders.index')->with(['success'=>'تم الحذف  بنجاح']);
    }
}
