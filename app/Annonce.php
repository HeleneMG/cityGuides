<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    // PROPRIETES D'OBJET
    protected $fillable = [
        "titre", "choixVisite", "contenu", "photo", "ville", "date", "heure", "user_id",
    ];
}
