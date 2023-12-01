<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = [
            ['NomVille' => 'Ouagadougou'],
            ['NomVille' => 'Bobo-dioulasso'],
            ['NomVille' => 'Koudougou'],
            ['NomVille' => 'Banfora'],
            ['NomVille' => 'Dedougou'],
        ];

        DB::table('villes')->insert($villes);
    }
}