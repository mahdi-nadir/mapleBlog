<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('steps')->insert([
            ['name_en' => 'Pre-ITA', 'name_fr' => 'Pre-IPD'],
            ['name_en' => 'ITA', 'name_fr' => 'IPD'],
            ['name_en' => 'Post-ITA', 'name_fr' => 'Post-IPD'],
            ['name_en' => 'Post-AoR', 'name_fr' => 'Post-AoR'],
            ['name_en' => 'Post-PPR', 'name_fr' => 'Post-PPR'],
            ['name_en' => 'post-CoPR', 'name_fr' => 'post-CoPR'],
            ['name_en' => 'Pre-Landing', 'name_fr' => 'Pre-Arrivée'],
            ['name_en' => 'Landing', 'name_fr' => 'Arrivée'],
            ['name_en' => 'Settlement', 'name_fr' => 'Installation'],
            ['name_en' => 'Pre-Citizenship', 'name_fr' => 'Pre-Citoyenneté'],
            ['name_en' => 'Citizenship', 'name_fr' => 'Citoyenneté']
        ]);
    }
}
