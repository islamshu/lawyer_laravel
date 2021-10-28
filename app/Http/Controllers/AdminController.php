<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AdminDashboard.admin.index')->with('admins',Admin::get());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminDashboard.admin.create');
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
            'name'=>'required',
            'email'=>'required|email|unique:admins,email',
            'password'=>'required|min:8',
            'phone'=>'required'
        ]);
        $request_all = $request->except(['password']);
        $request_all['password']= bcrypt($request->password);
        Admin::create($request_all);
        return redirect()->route('admins.index')->with(['success'=>'تم اضافة المدير بنجاح']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('AdminDashboard.admin.edit')->with('admin',$admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins,email,'.$admin->id,
            'phone'=>'required'
        ]);
        $request_all = $request->except(['password']);
        if($request->password != null){
            $request_all['password']= bcrypt($request->password);
        }
        $admin->update($request_all);
        return redirect()->route('admins.index')->with(['success'=>'تم تعديل المدير بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admins.index')->with(['success'=>'تم حذف المدير بنجاح']);
    }
    public function get_login(){
        return view('AdminDashboard.auth.login');
    }
    public function post_login(Request $request){
        if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()->route('admin.dashboard');
                
        }
        return redirect()->back()->with(['error'=>'login faild']);
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.get_login');
    }
}
