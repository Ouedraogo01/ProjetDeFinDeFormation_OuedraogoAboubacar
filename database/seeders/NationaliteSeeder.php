<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationaliteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalites = [
            ['NomNationalite' => 'Burkinabé'],
            ['NomNationalite' => 'Ivoirien'],
            ['NomNationalite' => 'Sénégalais'],
            ['NomNationalite' => 'Camerounais'],
            ['NomNationalite' => 'Malien'],
        ];

        DB::table('nationalites')->insert($nationalites);
    }
}