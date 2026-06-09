<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $table = 'taches';

    protected $fillable = [
        'titre',
        'details',
        'etat',
        'priorite',
        'id_projet',
        'id_user'
    ];

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function projet()
    {
        return $this->belongsTo(Projet::class, 'id_projet');
    }
}
