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
    public $national_id;
    public $address;
    public $religion;

    public function __construct()
    {
        $this->start_date = date('Y-m-d', strtotime(now()));
        $this->religion = 'مسلم';
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
        'national_id'      => 'required',
        'address'          => 'required',
        'religion'         => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function store ()
    {
        $this->validate();

        try{    
            DB::table('employees')->insert([
                'name'              => $this->name,
                'position'          => $this->position,
                'qualification'     => $this->qualification,
                'phone'             => $this->phone,
                'salary'            => $this->salary,
                'email'             => $this->email,
                'start_date'        => $this->start_date,
                'date_of_birth'     => $this->date_of_birth,
                'national_id'       => $this->national_id,
                'address'           => $this->address,
                'religion'          => $this->religion,
            ]);

            $this->resetFields();
            $this->emit('Success-Alert');
            
        } catch (\Exception $ex) {
            $this->emit('Error-Alert');
        }

        $this->emit('added-successfully');
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
        $this->national_id      = '';
        $this->address          = '';
        // $this->religion         = '';
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
        $this->national_id      = $employee->national_id;
        $this->address          = $employee->address;
        $this->religion         = $employee->religion;
    }

    public function update ()
    {
        $this->validate();

        try{    
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
                'national_id'       => $this->national_id,
                'address'           => $this->address,
                'religion'          => $this->religion,
            ]);

            $this->resetFields();
            $this->emit('Toast-Alert');
            
        } catch (\Exception $ex) {
            $this->emit('Error-Alert');
        }

        $this->emit('updated-successfully');
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
