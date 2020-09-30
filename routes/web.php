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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Auth::routes();

Route::view('facebook-login', "facebook")->name("facebook.login");
Route::get('auth/facebook', 'FacebookloginController@redirect');
Route::get('auth/facebook/callback', 'FacebookloginController@callback');
//Route::get('/',"FController@index")->name("f.index");


Route::prefix("panel")->middleware(["auth","isAdmin"])->group(function (){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource("/batch","BatchController");
    Route::resource("/course","CourseController");
    Route::resource("/certificate","CertificateController");
    Route::resource("/entry","EntryController");
    Route::resource("/access","AccessController");


});


