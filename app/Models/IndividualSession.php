<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndividualSession extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'children_id',
        'employee_id',
        'amount',
        'remaining',
    ];

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
