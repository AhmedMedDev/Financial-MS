<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Childrens extends Component
{
    protected $listeners = ['deleteConfirmed' =>'delete'];

    public $childrens;
    public $ids;
    public $child_name;
    public $child_image;
    public $parent;
    public $phone;
    public $notes;

    protected $rules = [
        'child_name'    => 'required|min:6',
        'parent'        => 'required|min:6',
        'phone'         => 'required|max:11',
        'notes'         => 'nullable|string',
    ];

    public function resetFields ()
    {
        $this->child_name       = '';
        $this->child_image      = '';
        $this->parent           = '';
        $this->phone            = '';
        $this->notes            = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function store ()
    {
        try{    
            $this->validate();

            DB::table('childrens')->insert([
                'child_name'    => $this->child_name,
                'parent'        => $this->parent,
                'phone'         => $this->phone,
                'notes'         => $this->notes,
            ]);

            $this->resetFields();

            $this->emit('added-successfully');
            $this->emit('Success-Alert');
            
        } catch (\Exception $ex) {
            $this->emit('added-successfully');
            $this->emit('Error-Alert');
        }
    }

    public function edit ($id)
    {
        $children = DB::table('childrens')->where('id', $id)->first();

        $this->ids          = $children->id;
        $this->child_name   = $children->child_name;
        $this->parent       = $children->parent;
        $this->phone        = $children->phone;
        $this->notes        = $children->notes;
    }

    public function update ()
    {
        try{ 
            $this->validate();

            DB::table('childrens')
            ->where('id', $this->ids)
            ->update([
                'child_name'    => $this->child_name,
                'parent'        => $this->parent,
                'phone'         => $this->phone,
                'notes'         => $this->notes,
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
        DB::table('childrens')
        ->where('id', $this->ids)->delete();
    }

    public function render()
    {
        $this->childrens = DB::table('childrens')->orderByDesc('id')->get();

        return view('livewire.childrens');
    }
}
