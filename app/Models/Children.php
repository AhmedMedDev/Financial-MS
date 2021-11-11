<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'child_name',
        'parent',
        'phone',
        'notes',
        'date_of_birth',
        'date',
        'gender',
        'nationality',
        'religion',
        'num_of_bro',
        'rank_of_bro',
        'address',
        'national_id',
        'monthly_expenses',
        'bus_expenses',
    ];

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
