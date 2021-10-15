<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Salaries extends Component
{
    public $salaries;
    public $month;

    public function receivedSalary ($employee_id, $employee_name, $finalsalary, $month) 
    {
        try{    
            // Make a export 
            DB::table('financial_operations')->insert([
                'amount' => $finalsalary,
                'client' => $employee_name,
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
            
        } catch (\Exception $ex) {
            $this->emit('Error-Alert');
        }
    }

    public function render()
    {
        $this->month = DB::select('SELECT MONTH(CURDATE()) AS curMonth')[0]->curMonth ;
        $this->salaries = DB::table('salaries')->get();
        return view('livewire.salaries');
    }
}
