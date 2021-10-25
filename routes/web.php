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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('employees', 'EmployeeController');

Route::post('attendance_lists', function (Request $request) {

    DB::table('attendance_lists')->insert([
        'employee_id'   => $request->employee_id,
        'is_attende'    => $request->is_attende,
        'delay_min'     => $request->delay_min,
    ]);

    return response()->json(['status' => true]);
});

Route::post('receivedSalary', function (Request $request) {

    // Make a export 
    DB::table('financial_operations')->insert([
        'amount'    => $request->finalsalary,
        'client'    => $request->name,
        'reason'    => "استلام راتب لشهر $request->month",
        'receipt'   => $request->receipt,
        'status'    => 0,
    ]);

    // Make salaries received 
    DB::table('salaries_received')->insert([
        'employee_id' => $request->employee_id,
        'is_received' => 1,
        'month'       => $request->month
    ]);

    return response()->json(['status' => true]);
});

Route::get('/{page}', function ($page) {

    if(view()->exists($page)) return view($page);

    return view('404');
});


