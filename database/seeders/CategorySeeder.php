<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name_en' => 'Express Entry', 'name_fr' => 'Entrée Express'],
            ['name_en' => 'Arrima', 'name_fr' => 'Arrima'],
            ['name_en' => 'Work visa', 'name_fr' => 'Permis de travail'],
            ['name_en' => 'Study visa', 'name_fr' => 'Permis d\'étude'],
            ['name_en' => 'Family Sponsorship and Reunification', 'name_fr' => 'Parrainage et regroupement familial'],
            ['name_en' => 'Canadian Citizenship', 'name_fr' => 'Citoyenneté Canadienne'],
            ['name_en' => 'Canadian Immigration News', 'name_fr' => 'Infos sur l\'immigration canadienne'],
            ['name_en' => 'Settlement and Integration', 'name_fr' => 'Installation et intégration'],
            ['name_en' => 'Community and Diversity', 'name_fr' => 'Communauté et diversité'],
        ]);
    }
}
