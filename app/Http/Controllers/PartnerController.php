<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.partner.index')->with('partners',Partner::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDashboard.partner.create');

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
        $sevice = new Partner();
        $sevice->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        $sevice->image = $request->image->store('partners');
        $sevice->save();
        return redirect()->route('partners.index')->with(['success'=>'تمت الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('AdminDashboard.partner.edit')->with('partner',$partner);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
        ]);
        $sevice =Partner::find($id);
        $sevice->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        if($request->image != null){
            $sevice->image = $request->image->store('partners');
        }
        
        $sevice->save();
        return redirect()->route('partners.index')->with(['success'=>'تمت التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->route('partners.index')->with(['success'=>'تم الحذف  بنجاح']);
    }
}
