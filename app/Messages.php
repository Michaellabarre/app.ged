<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable = [
        'objet', 'contenu', 'destinataire', 'users'
    ];

    public function messages()
    {
        return $this->belongsTo(\App\Messages::class);
    }
}
