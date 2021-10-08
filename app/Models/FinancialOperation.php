<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialOperation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amount',
        'client',
        'reason',
        'status',
    ];

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
