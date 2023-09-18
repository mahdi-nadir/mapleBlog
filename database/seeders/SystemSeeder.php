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
            ['name' => 'Arrima'],
            ['name' => 'Express Entry'],
            ['name' => 'Citizenship'],
            ['name' => 'Work permit'],
            ['name' => 'Study permit'],
            ['name' => 'Visitor'],
        ]);
    }
}
