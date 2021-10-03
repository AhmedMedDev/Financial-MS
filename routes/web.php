<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/exports', function () {
    

    $exports = DB::table('financial_operations')->where('status',1)->get();


    return view('exports')->with('exports',$exports);
});

Route::get('/{page}', function ($page) {

    if(view()->exists($page)) return view($page);

    return view('404');
});


