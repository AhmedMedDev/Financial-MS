<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalaryChange extends Model
{ 
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'employee_id',
       'amount',
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
