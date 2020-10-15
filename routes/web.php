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

Route::prefix("student")->middleware(["auth","isStudent"])->group(function (){
    Route::resource("/access","AccessController");
    Route::get('/dashboard',"SController@index")->name("s.index");
    Route::get('/request-certificate',"SController@rc")->name("s.rc");
    Route::get("/entry/{id}","SController@entry")->name('s.entry');
    Route::post("/entry/store","SController@entry_store")->name('e.store');
    Route::view("/list","s.list")->name("s.list");

});

Route::prefix("panel")->middleware(["auth","isAdmin"])->group(function (){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource("/batch","BatchController");
    Route::resource("/course","CourseController");
    Route::get("/certificate/{id}","CertificateController@store")->name('certificate.store');
    Route::get("/certificate","CertificateController@index")->name('certificate.index');
    Route::delete("/certificate/{id}","CertificateController@destroy")->name('certificate.destroy');
    Route::resource("/access","AccessController");
    Route::get('/entry',"EntryController@index")->name('entry.index');
    Route::delete('/entry/{id}',"EntryController@destroy")->name('entry.destroy');



});


