<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Absences extends Component
{
    public $absences;

    public function deductionFromSalary ($employee_id, $amount, $date, $month) 
    {
        // Store at salary_changes
        DB::table('salary_changes')->insert([
            'employee_id'   => $employee_id,
            'amount'        => -$amount,
            'reason'        => "absences deductions for $date",
            'status'        => 0,
        ]);

        // Make salaries received 
        DB::table('absences_deductions')->insert([
            'employee_id' => $employee_id,
            'date'        => $date
        ]);

        $this->emit('Success-Alert');
    }

    public function render()
    {
        $this->absences = DB::table('absences')->get();

        return view('livewire.absences');
    }
}
