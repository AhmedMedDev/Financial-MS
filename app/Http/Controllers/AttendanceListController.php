<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        DB::table('attendance_lists')->insert([
            'employee_id'   => $request->employee_id,
            'is_attende'    => $request->is_attende,
            'delay_min'     => $request->delay_min,
        ]);
    
        return response()->json(['status' => true]);
    }
}
