<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Salaries extends Component
{
    public $salaries;
    public $receipt;
    public $month;

    public function render()
    {
        $this->month = date('m',strtotime(now()));
        $this->salaries = DB::table('salaries')->get();
        return view('livewire.salaries');
    }
}
