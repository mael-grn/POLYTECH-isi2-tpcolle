<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $table = 'projets';

    protected $fillable = [
        'nomProjet',
        'dateDebut',
        'dateFin',
        'lienGithub'
    ];

    public function taches()
    {
        return $this->hasMany(Tache::class, 'id_projet');
    }
}
