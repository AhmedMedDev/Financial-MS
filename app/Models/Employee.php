<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'         ,
        'salary'       ,
        'national_id'  ,
        'date_of_birth',
        'qualification',
        'address'      ,
        'religion'     ,
        'phone'        ,
        'position'     ,
        'email'        ,
        'start_date'   ,
    ];

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
