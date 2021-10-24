<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Employees extends Component
{
    protected $listeners = ['deleteConfirmed' =>'delete'];

    public $employees;
    public $ids;
    public $name;
    public $position;
    public $qualification;
    public $phone;
    public $salary;
    public $avatar;
    public $email;
    public $start_date;
    public $date_of_birth;

    public function __construct()
    {
        $this->start_date = date('Y-m-d', strtotime(now()));
    }

    protected $rules = [
        'name'             => 'required',
        'position'         => 'required',
        'qualification'    => 'required',
        'phone'            => 'required',
        'salary'           => 'required|integer',
        'email'            => 'nullable|email',
        'start_date'       => 'required|date',
        'date_of_birth'    => 'required|date',
        // 'avatar'           => 'required|image',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function store ()
    {
        try{    
            $this->validate();

            DB::table('employees')->insert([
                'name'              => $this->name,
                'position'          => $this->position,
                'qualification'     => $this->qualification,
                'phone'             => $this->phone,
                'salary'            => $this->salary,
                'email'             => $this->email,
                'start_date'        => $this->start_date,
                'date_of_birth'     => $this->date_of_birth,
                // 'avatar'            => $this->avatar,
            ]);

            $this->resetFields();

            $this->emit('added-successfully');
            $this->emit('Success-Alert');
            
        } catch (\Exception $ex) {
            $this->emit('added-successfully');
            $this->emit('Error-Alert');
        }
    }

    public function resetFields ()
    {
        $this->name             = '';
        $this->position         = '';
        $this->qualification    = '';
        $this->phone            = '';
        $this->salary           = '';
        $this->avatar           = '';
        $this->email            = '';
        $this->start_date       = '';
        $this->date_of_birth    = '';
    }

    public function edit ($id)
    {
        $employee = DB::table('employees')->where('id', $id)->first();

        $this->ids              = $employee->id;
        $this->name             = $employee->name;
        $this->position         = $employee->position;
        $this->qualification    = $employee->qualification;
        $this->phone            = $employee->phone;
        $this->salary           = $employee->salary;
        $this->email            = $employee->email;
        $this->start_date       = $employee->start_date;
        $this->date_of_birth    = $employee->date_of_birth;
        // $this->avatar           = $employee->avatar;
    }

    public function update ()
    {
        try{ 
            $this->validate();

            DB::table('employees')
            ->where('id', $this->ids)
            ->update([
                'name'              => $this->name,
                'position'          => $this->position,
                'qualification'     => $this->qualification,
                'phone'             => $this->phone,
                'salary'            => $this->salary,
                'email'             => $this->email,
                'start_date'        => $this->start_date,
                'date_of_birth'     => $this->date_of_birth,
                // 'avatar'            => $this->avatar,
            ]);

            $this->resetFields();

            $this->emit('updated-successfully');
            $this->emit('Toast-Alert');

        } catch (\Exception $ex) {
            $this->emit('updated-successfully');
            $this->emit('Error-Alert');
        }
    }

    function confirmDelete ($id)
    {
        $this->emit('Are-You-Sure');
        $this->ids = $id;
    }

    function delete ()
    {
        DB::table('employees')
        ->where('id', $this->ids)->delete();
    }

    public function render()
    {
        $this->employees = DB::table('employees')
        ->orderBy('id', 'desc')->get();

        return view('livewire.employees');
    }
}
