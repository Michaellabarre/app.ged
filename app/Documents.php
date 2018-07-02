<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable = [
        'intitule', 'description', 'resume', 'mot_cle', 'chemin', 'users', 'categories_documents', 'statuts', 'formats'
    ];

    public function users ()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function categories_documents ()
    {
        return $this->belongsTo(\App\Categories_documents::class);
    }

    public function statuts ()
    {
        return $this->belongsTo(\App\Statuts::class);
    }

    public function formats ()
    {
        return $this->belongsTo(\App\Formats::class);
    }
}
