<?php

namespace App\Http\Controllers;

use App\Category;
use App\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.lawyers.index')->with('lawyers', Lawyer::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDashboard.lawyers.create')->with('categories',Category::get());
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
            'name' => 'required',
            'email' => 'required|email|unique:lawyers,email',
            'password' => 'required|min:8',
            'phone' => 'required',
            'category_id' => 'required',
            'membership_no' => 'required'
        ]);
        $request_all = $request->except(['password']);
        $request_all['password'] = bcrypt($request->password);
        Lawyer::create($request_all);
        return redirect()->route('lawyers.index')->with(['success' => 'تم اضافة الاستشاري بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function show(Lawyer $lawyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Lawyer $lawyer)
    {
        return view('AdminDashboard.lawyers.edit')->with('lawyer', $lawyer)->with('categories',Category::get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lawyer $lawyer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:lawyers,email,' . $lawyer->id,
            'phone' => 'required',
            'category_id' => 'required',
            'membership_no' => 'required'
        ]);
        $request_all = $request->except(['password']);
        $request_all['password'] = bcrypt($request->password);
        $lawyer->update($request_all);
        return redirect()->route('lawyers.index')->with(['success' => 'تم تعديل الاستشاري بنجاح']);
    }
    public function updateStatus(Request $request)
{
    $lawyer = Lawyer::findOrFail($request->lawyer_id);
    $lawyer->is_youtube_live = $request->is_youtube_live;
    $lawyer->save();

    return response()->json(['message' => 'lawyer status updated successfully.']);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lawyer $lawyer)
    {
        $lawyer->delete();
        return redirect()->route('lawyers.index')->with(['success' => 'تم حذف الاستشاري بنجاح']);
    }
}
