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

    public function deleteAttendance ($id)
    {
        DB::table('attendance_lists')->where('id', $id)->delete();

        $this->emit('Toast-Alert');
    }

    public function render()
    {
        $this->attendance = DB::select('SELECT * FROM `employees` WHERE id NOT IN (SELECT employee_id FROM `attendance_lists` WHERE DATE(date) = CURDATE())');

        $this->savedAttendance = DB::select('SELECT attendance_lists.*, employees.name , employees.position FROM `attendance_lists`, `employees` WHERE DATE(date) = CURDATE() AND attendance_lists.employee_id = employees.id');

        return view('livewire.attendance');
    }
}
