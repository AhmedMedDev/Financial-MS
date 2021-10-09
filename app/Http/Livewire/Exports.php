<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Exports extends Component
{

    protected $listeners = ['deleteConfirmed' =>'delete'];

    public $exports;
    public $ids;
    public $employee;
    public $amount;
    public $reason;

    
    public function store ()
    {
        DB::table('financial_operations')->insert([
            'amount' => $this->amount,
            'client' => $this->employee,
            'reason' => $this->reason,
            'status' => 0,
        ]);

        $this->resetFields();

        $this->emit('added-successfully');
        $this->emit('Success-Alert');
    }

    public function resetFields ()
    {
        $this->amount = '';
        $this->employee = '';
        $this->reason = '';
    }

    public function edit ($id)
    {
        $export = DB::table('financial_operations')->where('id', $id)->first();

        $this->ids = $export->id;
        $this->amount = $export->amount;
        $this->employee = $export->client;
        $this->reason = $export->reason;
    }

    public function update ()
    {
        DB::table('financial_operations')
        ->where('id', $this->ids)
        ->update([
            'amount' => $this->amount,
            'client' => $this->employee,
            'reason' => $this->reason,
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
        DB::table('financial_operations')
        ->where('id', $this->ids)->delete();
    }

    public function render()
    {
        $this->exports = DB::table('financial_operations')
        ->where('status',0)->orderBy('id', 'desc')->get();

        return view('livewire.exports');
    }
}
