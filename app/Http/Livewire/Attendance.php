<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Attendance extends Component
{
    public $attendance;
    public $is_attende;
    public $delay_min;

    public function saveAttendance () 
    {
        

        $this->emit('Success-Alert');
    }

    public function render()
    {
        $this->attendance = DB::select('SELECT * FROM `employees` WHERE id NOT IN (SELECT employee_id FROM `attendance_lists` WHERE DATE(date) = CURDATE())');

        return view('livewire.attendance');
    }
}
