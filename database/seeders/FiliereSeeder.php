<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiliereSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('filieres')->insert([
            ['id' => 1,'departement_id' => 2,'nom_filiere' => 'assistance administrative'],
            ['id' => 2,'departement_id' => 2,'nom_filiere' => 'analyse comptable'],
            ['id' => 3,'departement_id' => 2,'nom_filiere' => 'analyse financiere'],
            ['id' => 4,'departement_id' => 1,'nom_filiere' => 'génie civil /bâtiment et travaux publics'],
            ['id' => 5,'departement_id' => 1,'nom_filiere' => 'génie électrique /énergie solaire'],
            ['id' => 6,'departement_id' => 1,'nom_filiere' => 'génie électrique /maintenance industrielle'],
            ['id' => 7,'departement_id' => 1,'nom_filiere' => 'génie électrique /réseau électrique'],
            ['id' => 8,'departement_id' => 2,'nom_filiere' => 'gestion des entreprises hotelieres'],
            ['id' => 9,'departement_id' => 2,'nom_filiere' => 'management des entreprises touristiques'],
            ['id' => 10,'departement_id' => 2,'nom_filiere' => 'marketing et gestion commerciale'],
        ]);
    }
}
