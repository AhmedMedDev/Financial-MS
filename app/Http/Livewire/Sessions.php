<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Sessions extends Component
{
    protected $listeners = ['deleteConfirmed' =>'delete'];

    public $sessions;
    public $ids;
    public $employee_id;
    public $children_id;
    public $amount;
    public $remaining;
    public $date;

    protected $rules = [
        'children_id' => 'required',
        'employee_id' => 'required',
        'amount'      => 'required',
        'remaining'   => 'required',
        'date'        => 'date',
    ];

    public function __construct()
    {
        $this->date = date('Y-m-d', strtotime(now()));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function resetFields ()
    {
        $this->employee_id      = '';
        $this->children_id      = '';
        $this->amount           = '';
        $this->remaining        = '';
    }

    public function store ()
    {
        $this->validate();

        try{    
            DB::table('individual_sessions')->insert([
                'children_id'   => $this->children_id,
                'employee_id'   => $this->employee_id,
                'amount'        => $this->amount,
                'remaining'     => $this->remaining,
                'date'          => $this->date,
            ]);

            $this->resetFields();
            $this->emit('Success-Alert');
            
        } catch (\Exception $ex) {
            $this->emit('Error-Alert');
        }

        $this->emit('added-successfully');
    }

    public function edit ($id)
    {
        $sessions = DB::table('individual_sessions')
            ->where('id', $id)->first();

        $this->ids              = $sessions->id;
        $this->children_id      = $sessions->children_id;
        $this->employee_id      = $sessions->employee_id;
        $this->amount           = $sessions->amount;
        $this->remaining        = $sessions->remaining;
        $this->date             = date('Y-m-d', strtotime($sessions->date));
    }

    public function update ()
    {
        $this->validate();

        try{    
            DB::table('individual_sessions')
            ->where('id', $this->ids)
            ->update([
                'employee_id'  => $this->employee_id,
                'children_id'  => $this->children_id,
                'amount'       => $this->amount,
                'remaining'    => $this->remaining,
                'date'         => $this->date,
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
        DB::table('individual_sessions')
        ->where('id', $this->ids)->delete();
    }

    public function render()
    {
        $this->sessions = DB::table('sessions')
            ->orderBy('session_id', 'desc')->get();

        return view('livewire.sessions');
    }
}
