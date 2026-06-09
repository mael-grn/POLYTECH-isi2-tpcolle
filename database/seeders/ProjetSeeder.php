<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projet;
use Carbon\Carbon;

class ProjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de projets
        $p1 = new Projet();
        $p1->nomProjet = 'Site vitrine';
        $p1->started_at = Carbon::now()->subDays(30);
        $p1->ended_at = null;
        $p1->lienGithub = 'https://github.com/example/site-vitrine';
        $p1->save();

        $p2 = new Projet();
        $p2->nomProjet = 'API interne';
        $p2->started_at = Carbon::now()->subDays(60);
        $p2->ended_at = Carbon::now()->subDays(10);
        $p2->lienGithub = 'https://github.com/example/api-interne';
        $p2->save();

        $p3 = new Projet();
        $p3->nomProjet = 'Refonte dashboard';
        $p3->started_at = Carbon::now()->subDays(15);
        $p3->ended_at = null;
        $p3->lienGithub = null;
        $p3->save();
    }
}

