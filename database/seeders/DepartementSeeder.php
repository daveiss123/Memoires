<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('departements')->insert([
            ['id' => '1','nom_departement' => 'Technique Industrielle'],
            ['id' => '2','nom_departement' => 'Technique tertiaire'],
        ]);
    }
}


