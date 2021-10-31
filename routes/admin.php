<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:admin')->group(function () {
    Route::get('/', function () {
        return view('layouts.dashboard');
    })->name('admin.dashboard');
    Route::resource('admins', 'AdminController');
    Route::resource('categories', 'CategoryController');
    Route::resource('lawyers', 'LawyerController');
    Route::resource('services', 'ServiceController');
    Route::resource('general', 'GeneralController');
    Route::get('lawyers_update_live', 'LawyerController@updateStatus')->name('lawyer_id.update.live');
    
    Route::get('logout','AdminController@logout')->name('admin.logout');
});


Route::middleware('guest:admin')->group(function () {

Route::get('login', 'AdminController@get_login')->name('admin.get_login');
Route::post('login', 'AdminController@post_login')->name('admin.post_login');
});
