<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Absences extends Component
{
    public $absences;

    public function deductionFromSalary ($employee_id, $amount, $date, $month) 
    {
        try{    

        DB::transaction(function () use ($employee_id, $amount, $date, $month) {

            // Store at salary_changes
            DB::table('salary_changes')->insert([
                'employee_id'   => $employee_id,
                'amount'        => -$amount,
                'reason'        => "خصم غياب " . date('d-M', strtotime($date)),
                'status'        => 0,
            ]);

            // Make salaries received 
            DB::table('absences_deductions')->insert([
                'employee_id' => $employee_id,
                'date'        => $date
            ]);
            
            $this->emit('Success-Alert');
        });
           
       } catch (\Exception $ex) {
           $this->emit('Error-Alert');
       }
    }

    public function render()
    {
        $this->absences = DB::table('absences')->get();

        return view('livewire.absences');
    }
}
