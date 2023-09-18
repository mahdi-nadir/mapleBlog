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
            ['name' => 'Pre-ITA'],
            ['name' => 'ITA'],
            ['name' => 'Post-ITA'],
            ['name' => 'Post-AoR'],
            ['name' => 'Post-PPR'],
            ['name' => 'post-COPR'],
            ['name' => 'Pre-Landing'],
            ['name' => 'Landing'],
            ['name' => 'Settlement'],
            ['name' => 'Pre-Citizenship'],
            ['name' => 'Citizenship'],
        ]);
    }
}
