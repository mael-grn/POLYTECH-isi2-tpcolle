<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tache;
use App\Models\User;
use App\Models\Projet;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $projets = Projet::all();

        if ($users->isEmpty() || $projets->isEmpty()) {
            return; // dependances non satisfaites
        }

        // Tâches exemples
        Tache::create([
            'titre' => 'Créer la page d\'accueil',
            'details' => 'Maquette Figma disponible, responsive nécessaire',
            'etat' => false,
            'priorite' => 'high priority',
            'id_user' => $users->first()->id,
            'id_projet' => $projets->first()->id,
        ]);

        Tache::create([
            'titre' => 'Écrire la documentation API',
            'details' => 'Documenter les endpoints principaux et exemples d\'utilisation',
            'etat' => false,
            'priorite' => 'normal priority',
            'id_user' => $users->skip(1)->first()->id ?? $users->first()->id,
            'id_projet' => $projets->skip(1)->first()->id ?? $projets->first()->id,
        ]);

        Tache::create([
            'titre' => 'Corriger bug authentification',
            'details' => 'Analyse des logs et correction du middleware',
            'etat' => true,
            'priorite' => 'very high priority',
            'id_user' => $users->last()->id,
            'id_projet' => $projets->first()->id,
        ]);
    }
}

