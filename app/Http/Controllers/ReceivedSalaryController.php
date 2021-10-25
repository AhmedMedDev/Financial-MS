<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceivedSalaryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
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
    }
}
