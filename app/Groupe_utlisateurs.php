<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe_utlisateurs extends Model
{
    protected $fillable = [
        'intitule', 'description', 'privileges'
    ];

    public function privileges()
    {
        return $this->belongsTo(\App\Privileges::class);
    }
}
