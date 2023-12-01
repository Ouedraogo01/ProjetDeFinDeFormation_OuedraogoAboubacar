<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupeSanguinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groupesanguins = [
            ['NomGroupe' => 'A+'],
            ['NomGroupe' => 'A-'],
            ['NomGroupe' => 'B+'],
            ['NomGroupe' => 'B-'],
            ['NomGroupe' => 'AB+'],
            ['NomGroupe' => 'AB-'],
            ['NomGroupe' => 'O+'],
            ['NomGroupe' => 'O-'],
        ];

        DB::table('groupe_sanguins')->insert($groupesanguins);
    }
}