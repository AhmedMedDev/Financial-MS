<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Salaries extends Component
{
    public $salaries;
    public $month;

    public function receivedSalary ($employee_id, $finalsalary, $month) 
    {
        // Fetch Employee ByID
        $employee = DB::table('employees')
        ->where('id', $employee_id)->first();

        // Make a export 
        DB::table('financial_operations')->insert([
            'amount' => $finalsalary,
            'client' => $employee->name,
            'reason' => "received salary $month",
            'status' => 0,
        ]);

        // Make salaries received 
        DB::table('salaries_received')->insert([
            'employee_id' => $employee_id,
            'is_received' => 1,
            'month'       => $month
        ]);

        $this->emit('Success-Alert');
    }

    public function render()
    {
        $this->month = DB::select('SELECT MONTH(CURDATE()) AS curMonth')[0]->curMonth ;
        $this->salaries = DB::table('salaries')->get();
        return view('livewire.salaries');
    }
}
