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
    public $date;
    public $date_of_birth;
    public $gender;
    public $nationality;
    public $religion;
    public $num_of_bro;
    public $rank_of_bro;

    protected $rules = [
        'child_name'        => 'required',
        'parent'            => 'required',
        'phone'             => 'required',
        'notes'             => 'nullable|string',
        'date'              => 'date',
        'date_of_birth'     => 'required|date',
        'gender'            => 'required',
        'nationality'       => 'required',
        'religion'          => 'required',
        'num_of_bro'        => 'required',
        'rank_of_bro'       => 'required',
    ];

    public function __construct()
    {
        $this->date = date('Y-m-d', strtotime(now()));
        $this->gender = 'ذكر';
        $this->religion = 'مسلم';
    }

    public function resetFields ()
    {
        $this->child_name       = '';
        $this->child_image      = '';
        $this->parent           = '';
        $this->phone            = '';
        $this->notes            = '';
        // $this->date             = '';
        $this->date_of_birth    = '';
        // $this->gender           = '';
        $this->nationality      = '';
        // $this->religion         = '';
        $this->num_of_bro       = '';
        $this->rank_of_bro      = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function store ()
    {
        $this->validate();

        try{    
            DB::table('childrens')->insert([
                'child_name'        => $this->child_name,
                'parent'            => $this->parent,
                'phone'             => $this->phone,
                'notes'             => $this->notes,
                'date'              => $this->date,
                'date_of_birth'     => $this->date_of_birth,
                'gender'            => $this->gender,
                'nationality'       => $this->nationality,
                'religion'          => $this->religion,
                'num_of_bro'        => $this->num_of_bro,
                'rank_of_bro'       => $this->rank_of_bro,
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
        $children = DB::table('childrens')->where('id', $id)->first();

        $this->ids            = $children->id;
        $this->child_name     = $children->child_name;
        $this->parent         = $children->parent;
        $this->phone          = $children->phone;
        $this->notes          = $children->notes;
        $this->date           = $children->date;
        $this->date_of_birth  = $children->date_of_birth;
        $this->gender         = $children->gender;
        $this->nationality    = $children->nationality;
        $this->religion       = $children->religion;
        $this->num_of_bro     = $children->num_of_bro;
        $this->rank_of_bro    = $children->rank_of_bro;
    }

    public function update ()
    {
        $this->validate();

        try{    
            DB::table('childrens')
            ->where('id', $this->ids)
            ->update([
                'child_name'        => $this->child_name,
                'parent'            => $this->parent,
                'phone'             => $this->phone,
                'notes'             => $this->notes,
                'date'              => $this->date,
                'date_of_birth'     => $this->date_of_birth,
                'gender'            => $this->gender,
                'nationality'       => $this->nationality,
                'religion'          => $this->religion,
                'num_of_bro'        => $this->num_of_bro,
                'rank_of_bro'       => $this->rank_of_bro,
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
        DB::table('childrens')
        ->where('id', $this->ids)->delete();
    }

    public function render()
    {
        $this->childrens = DB::table('childrens')->orderByDesc('id')->get();

        return view('livewire.childrens');
    }
}
