<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archives extends Model
{
    protected $fillable = [
        'intitule', 'description', 'categories_archives', 'documents'
    ];

    public function categories_archives()
    {
        return $this->belongsTo(\App\Categories_archives::class);
    }
    public function documents()
    {
        return $this->belongsTo(\App\Documents::class);
    }
}
