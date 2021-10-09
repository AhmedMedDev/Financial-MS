<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Extras extends Component
{
    protected $listeners = ['deleteConfirmed' =>'delete'];

    public $extras;
    public $ids;
    public $employee_id;
    public $amount;
    public $reason;

    
    public function store ()
    {
        DB::table('salary_changes')->insert([
            'employee_id'   => $this->employee_id,
            'amount'        => $this->amount,
            'reason'        => $this->reason,
            'status'        => 1,
        ]);

        $this->resetFields();

        $this->emit('added-successfully');
        $this->emit('Success-Alert');
    }

    public function resetFields ()
    {
        $this->employee_id  = '';
        $this->amount       = '';
        $this->reason       = '';
    }

    public function edit ($id)
    {
        $extra = DB::table('salary_changes_emp')->where('extra_id', $id)->first();

        $this->ids          = $extra->extra_id;
        $this->employee_id  = $extra->employee_id;
        $this->amount       = $extra->amount;
        $this->reason       = $extra->reason;
    }

    public function update ()
    {
        DB::table('salary_changes')
        ->where('id', $this->ids)
        ->update([
            'employee_id'   => $this->employee_id,
            'amount'        => $this->amount,
            'reason'        => $this->reason,
        ]);

        $this->resetFields();

        $this->emit('updated-successfully');
        
        $this->emit('Toast-Alert');
    }

    function confirmDelete ($id)
    {
        $this->emit('Are-You-Sure');
        $this->ids = $id;
    }

    function delete ()
    {
        DB::table('salary_changes')
        ->where('id', $this->ids)->delete();
    }

    public function render()
    {
        $this->extras = DB::table('salary_changes_emp')
        ->where('status', 1)->orderBy('extra_id', 'desc')->get();

        return view('livewire.extras');
    }
}
