<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    
Auth::routes();
// Auth::routes(['register' => false]);

Route::get('/test', function () {
   return DB::table('childrens')->where('id', 21)->first()->child_name;
});

Route::middleware(['auth'])->group(function () {

    Route::view('/', 'index');
    
    Route::post('attendance_lists', 'AttendanceListController');
    
    Route::post('receivedSalary', 'ReceivedSalaryController');
    
    Route::get('/{page}', 'ViewsHandlerController');
});

