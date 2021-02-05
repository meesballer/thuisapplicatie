<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Bedrijven extends Model
{
    protected $fillable = [
        'Naam',
        'Email',
        'Website'
    ];
}
