<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendas extends Model
{
    protected $fillable = [
        'intitule', 'description', 'users'
    ];

    //Jointure des tables
    public function users()
    {
        return $this->belongsTo(\App\User::class);
    }
}
