<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories_documents extends Model
{
    protected $fillable = [
        'intitule', 'description', 'sous_categories'
    ];

    public function sous_categories()
    {
        return $this->belongsTo(\App\Sous_categories::class);
    }

}