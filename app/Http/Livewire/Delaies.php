<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Delaies extends Component
{
    public $delaies;

    public function deductionFromSalary ($employee_id, $amount, $month) 
    {
        try{    
            DB::transaction(function () use ($employee_id, $amount, $month) {

                // Store at salary_changes
                DB::table('salary_changes')->insert([
                    'employee_id'   => $employee_id,
                    'amount'        => -$amount,
                    'reason'        => "خصم تاخيرات شهر $month",
                    'status'        => 0,
                ]);

                // Make salaries received 
                DB::table('delay_deductions')->insert([
                    'employee_id' => $employee_id,
                    'month'       => $month
                ]);

                $this->emit('Success-Alert');
            });
            
        } catch (\Exception $ex) {
            $this->emit('Error-Alert');
        }
    }

    public function render()
    {
        $this->delaies = DB::table('delaies')->get();

        return view('livewire.delaies');
    }
}
