<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.team.index')->with('teams',Team::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDashboard.team.create');

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
            'name_ar'=>'required',
            'name_en'=>'required',
            'job_ar'=>'required',
            'job_en'=>'required',
            'image'=>'required', 
        ]);
        $sevice = new Team();
        $sevice->name =  ['en' => $request->name_en, 'ar' => $request->name_ar];
        $sevice->job_name =  ['en' => $request->job_en, 'ar' => $request->job_ar];

        $sevice->image = $request->image->store('teams');
        $sevice->save();
        return redirect()->route('team.index')->with(['success'=>'تمت الاضافة بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('AdminDashboard.team.edit')->with('team',$team);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name_ar'=>'required',
            'name_en'=>'required',
            'job_ar'=>'required',
            'job_en'=>'required',
        ]);
        $sevice = Team::find($id);
        $sevice->name =  ['en' => $request->name_en, 'ar' => $request->name_ar];
        $sevice->job_name =  ['en' => $request->job_en, 'ar' => $request->job_ar];
        if($request->image != null){
            $sevice->image = $request->image->store('teams');
        }
        $sevice->save();
        return redirect()->route('team.index')->with(['success'=>'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with(['success'=>'تم الحذف  بنجاح']);
    }
}
