<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bedrijf extends Model
{
    protected $fillable = [
        'Naam',
        'Email',
        'Website'
    ];
    // Een bedrijf kan meerdere medewerkers hebben
    public function medewerker()
    {
        return $this->hasMany(Medewerker::class);
    }
}
