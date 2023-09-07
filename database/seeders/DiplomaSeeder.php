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
            ['level' => 'Not set'],
            ['level' => 'Secondary Diploma'],
            ['level' => 'One-year program'],
            ['level' => 'Two-year program'],
            ['level' => 'Bachelor\'s degree'],
            ['level' => 'Two or more certificates'],
            ['level' => 'Master\'s degree'],
            ['level' => 'Doctorate'],
        ]);
    }
}
