<?php

namespace App\Http\Controllers;

use App\Founder;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.founder.create')->with('founder',Founder::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_en'=>'required',
            'title_ar'=>'required',
            'desc_ar'=>'required',
            'desc_en'=>'required',
        ]);
        $founder = Founder::first();
        $founder->title =  ['en' => $request->title_en, 'ar' => $request->title_ar];
        if($request->image){
            $founder->image = $request->image->store('founder');

        }
        $founder->desc = ['en' => $request->desc_ar, 'ar' => $request->desc_en];
        $founder->video = $request->video;
        $founder->save();
        return redirect()->back()->with(['success'=>'تمت التعديل بنجاح']);
    }

 
}
