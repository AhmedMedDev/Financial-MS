<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Exports extends Component
{
    use WithPagination;

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

        $this->emit('export-added-successfully');
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

        $this->emit('export-updated-successfully');
    }

    function delete ($id)
    {
        DB::table('financial_operations')
        ->where('id', $id)->delete();
    }

    public function render()
    {
        $this->exports = DB::table('financial_operations')->where('status',0)->get();

        return view('livewire.exports');
    }
}
