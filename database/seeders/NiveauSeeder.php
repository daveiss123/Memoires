<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NiveauSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('niveaux')->insert([
            ['nom_niveau' => 'Diplôme Universitaitre de Technologie (DUT)'],
            ['nom_niveau' => 'Licence Professionnelle'],
            ['nom_niveau'=> 'Master Professionnel']
        ]);
    }
}
