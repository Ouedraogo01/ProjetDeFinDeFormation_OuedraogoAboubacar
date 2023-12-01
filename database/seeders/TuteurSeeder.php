<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tuteurs = [
            ['nom' => 'CAMARA', 'prenom' => 'Dramane', 'profession' => 'Enseignant', 'telephone' => '01458965'],
            ['nom' => 'OUEDRAOGO', 'prenom' => 'Karim', 'profession' => 'Mecanicien', 'telephone' => '02457893'],
            ['nom' => 'OUATTARA', 'prenom' => 'Hamza', 'profession' => 'Médécin', 'telephone' => '03697545'],
            ['nom' => 'TRAORE', 'prenom' => 'Abibata', 'profession' => 'Ménagère', 'telephone' => '04596312'],
            ['nom' => 'KABORE', 'prenom' => 'Adèle', 'profession' => 'Pharmacienne', 'telephone' => '05789321'],
        ];

        DB::table('tuteurs')->insert($tuteurs);
    }
}