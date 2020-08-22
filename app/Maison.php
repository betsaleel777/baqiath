<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{
    public const RULES_FIRST = ['intitule' => 'required|max:100',
        'lieu' => 'required|max:100',
        'chambre' => 'max:3',
        'salon' => 'max:3',
        'superficie' => 'max:5',
        'statut' => 'max:100',
        'image_presentation' => 'required|dimensions:width=801,heigth=449|mimes:jpg,jpeg,png',
    ];
    public const RULES_SECOND = ['intitule' => 'required|max:100',
        'lieu' => 'required|max:100',
        'chambre' => 'max:3',
        'salon' => 'max:3',
        'superficie' => 'max:5',
        'statut' => 'max:100',
        'image_presentation' => 'required|dimensions:width=400,heigth=449|mimes:jpg,jpeg,png',
    ];
    protected $fillable = ['intitule', 'lieu', 'statut', 'chambre', 'salon', 'superficie', 'rang', 'image_presentation'];
}
