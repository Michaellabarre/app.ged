<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corbeilles extends Model
{
    protected $fillable = [
        'intitule', 'description', 'documents'
    ];

    public function documents()
    {
        return $this->belongsTo(\App\Documents::class);
    }
}
