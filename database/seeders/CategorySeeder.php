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
            ['name' => 'Express Entry'],
            ['name' => 'Arrima'],
            ['name' => 'Work visa'],
            ['name' => 'Study visa'],
            ['name' => 'Family Sponsorship and Reunification'],
            ['name' => 'Canadian Citizenship'],
            ['name' => 'Canadian Immigration News'],
            ['name' => 'Settlement and Integration'],
            ['name' => 'Community and Diversity'],
        ]);
    }
}
