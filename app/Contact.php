<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone','email','nomination','message'] ;

    //const RULES = ['phone' => ''] ;
}
