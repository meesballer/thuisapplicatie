<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Medewerker extends Model
{
    protected $fillable = [
        'VoorNaam',
        'AchterNaam',
        'bedrijfs_id',
        'Email',
        'Telefoon'
    ];
    public function Bedrijf()
    {
        return $this->belongsTo(Bedrijf::class, 'bedrijfs_id');
    }
}
