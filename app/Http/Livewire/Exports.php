<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Exports extends Component
{
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

        $this->amount = $export->amount;
        $this->employee = $export->client;
        $this->reason = $export->reason;
    }

    public function render()
    {
        $this->exports = DB::select('SELECT * FROM `financial_operations` WHERE financial_operations.status = 0');

        return view('livewire.exports');
    }
}
