<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MemoireSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('memoires')->insert([
            ['id' => 1,
            'theme' => 'Processus de calcul des coûts dans les entreprises d\'habillement',
            'date_de_soutenance' => '2020-03-11',
            'filiere_id' => 2,
            'user_id' => 1,
            'niveau_id' => 1,
            'fichier_pdf' => 'public/Memoires/Rapport_de_stage.pdf',
        ],
            
        ]);
    }
    
    protected function storePdfFile($fileName){
        return Storage::disk('public')->putFileAs('memoires', storage_path('app/public/memoires/' . $fileName), $fileName);
    }


}
