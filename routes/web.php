<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index');
Route::get('post/{slug}','HomeController@show');

Auth::routes();

Route::get('admin/dashboard', 'HomeController@list')->middleware('auth');
Route::post('admin/post', 'AdminController@store')->middleware('auth')->name('admin.post');
Route::get('admin/{post:slug}/edit', 'AdminController@edit')->middleware('auth');
Route::patch('/admin/{post:slug}/update', 'AdminController@update')->middleware('auth');