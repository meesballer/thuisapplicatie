<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Medewerker extends Model
{
    protected $fillable = [
        'VoorNaam',
        'AchterNaam',
        'Bedrijven_id',
        'Email',
        'Telefoon'
    ];
}
