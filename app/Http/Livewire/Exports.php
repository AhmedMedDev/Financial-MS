<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Str;

class Exports extends Component
{

    protected $listeners = ['deleteConfirmed' =>'delete'];

    public $exports;
    public $ids;
    public $client;
    public $amount;
    public $reason;
    public $receipt;
    public $date;

    protected $rules = [
        'amount'      => 'required',
        'client'      => 'required',
        'reason'      => 'required',
        'receipt'     => 'required',
        'date'        => 'date',
    ];

    public function __construct()
    {
        $this->date = date('Y-m-d', strtotime(now()));
        $this->receipt = Str::random(5);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function store ()
    {
        $this->validate();

        try{    
            DB::table('financial_operations')->insert([
                'amount'    => $this->amount,
                'client'    => $this->client,
                'reason'    => $this->reason,
                'receipt'   => $this->receipt,
                'date'      => $this->date,
                'status'    => 0,
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
        $this->amount = '';
        $this->client = '';
        $this->reason = '';
        $this->receipt = '';
    }

    public function edit ($id)
    {
        $export = DB::table('financial_operations')->where('id', $id)->first();

        $this->ids          = $export->id;
        $this->amount       = $export->amount;
        $this->client       = $export->client;
        $this->reason       = $export->reason;
        $this->receipt      = $export->receipt;
        $this->date         = date('Y-m-d', strtotime($export->date));
    }

    public function update ()
    {
        $this->validate();

        try{    
            DB::table('financial_operations')
            ->where('id', $this->ids)
            ->update([
                'amount'    => $this->amount,
                'client'    => $this->client,
                'reason'    => $this->reason,
                'receipt'   => $this->receipt,
                'date'      => $this->date,
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
