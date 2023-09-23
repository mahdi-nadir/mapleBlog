<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiplomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diplomas')->insert([
            ['level_en' => 'Secondary Diploma', 'level_fr' => 'Diplôme d\'études secondaires'],
            ['level_en' => 'One-year program', 'level_fr' => 'Programme d\'un an'],
            ['level_en' => 'Two-year program', 'level_fr' => 'Programme de deux ans'],
            ['level_en' => 'Bachelor\'s degree', 'level_fr' => 'Baccalauréat'],
            ['level_en' => 'Two or more certificates', 'level_fr' => 'Deux diplômes ou plus'],
            ['level_en' => 'Master\'s degree', 'level_fr' => 'Maîtrise'],
            ['level_en' => 'Doctorate', 'level_fr' => 'Doctorat']
        ]);
    }
}
