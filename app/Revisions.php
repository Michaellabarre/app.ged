<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revisions extends Model
{
    protected $fillable = [
        'intitule', 'description', 'documents'
    ];

    public function documents()
    {
        return $this->belongsTo(\App\Documents::class);
    }

}
