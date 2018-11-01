<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'TestController@dashboard')->middleware('checkLogin');
Route::get('login', 'TestController@login');
Route::post('login/process', 'TestController@loginProcess');
Route::get('logout', 'TestController@logout');
Route::get('login/{provider}','TestController@toProvider');
Route::get('login/{provider}/callback','TestController@callback');
// Route::get('email',function(){
//     return view('email');
// });