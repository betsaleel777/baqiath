<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone','email','nomination','message'] ;

    const RULES = ['phone' => 'required|max:15',
                   'email' => 'required|email|max:100',
                   'nomination' => 'required|max:100',
                   'message' => 'required'
                  ];
}
