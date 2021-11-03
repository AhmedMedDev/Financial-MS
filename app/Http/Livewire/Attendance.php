<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Attendance extends Component
{
    protected $listeners = ['refresh' =>'render'];

    public $attendance;
    public $savedAttendance;
    public $is_attende;
    public $delay_min;

    public function deleteAttendance ($emp_id)
    {
        DB::select("DELETE FROM `attendance_lists` WHERE employee_id = $emp_id AND DATE(date) = CURDATE()");

        $this->emit('Toast-Alert');
    }

    public function render()
    {
        $this->attendance = DB::select('SELECT * FROM `employees` WHERE id NOT IN (SELECT employee_id FROM `attendance_lists` WHERE DATE(date) = CURDATE())');

        $this->savedAttendance = DB::select('SELECT * FROM `employees` WHERE id IN (SELECT employee_id FROM `attendance_lists` WHERE DATE(date) = CURDATE())');

        return view('livewire.attendance');
    }
}
