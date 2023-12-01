<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['nom' => 'PHP'],
            ['nom' => 'JAVA'],
            ['nom' => 'C++'],
            ['nom' => 'C#'],
            ['nom' => 'LARAVEL'],
        ];

        DB::table('tags')->insert($tags);
    }
}