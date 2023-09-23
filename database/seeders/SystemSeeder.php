<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('systems')->insert([
            ['name_en' => 'Arrima', 'name_fr' => 'Arrima'],
            ['name_en' => 'Express Entry', 'name_fr' => 'Entrée Express'],
            ['name_en' => 'Citizenship', 'name_fr' => 'Citoyenneté'],
            ['name_en' => 'Study permit', 'name_fr' => 'Permis d\'études'],
            ['name_en' => 'Work permit', 'name_fr' => 'Permis de travail'],
            ['name_en' => 'Visitor', 'name_fr' => 'Visiteur']
        ]);
    }
}
