<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnages')->insert([
            [
             'nom'=>'Obélix',
             'année_création'=>1959,
             'bd'=>'Astérix Le Gaulois',
             'dessinateur_id'=>1
            ],
            [
             'nom'=>'Lucky Luke',
             'année_création'=>1947,
             'bd'=>'Un cow-boy dans le coton',
             'dessinateur_id'=>2
            ],
            [
             'nom'=>'Joe Dalton',
             'année_création'=>1951,
             'bd'=>'Hors la loi',
             'dessinateur_id'=>2
            ],
            [
             'nom'=>'Spirou',
             'année_création'=>1938,
             'bd'=>'Astérix Le Gaulois',
             'dessinateur_id'=>3
            ],
            [
             'nom'=>'Capitaine Haddock',
             'année_création'=>1938,
             'bd'=>'Crabe aux pinces d\'or',
             'dessinateur_id'=>4
            ],
            [
             'nom'=>'Professeur Tournesol',
             'année_création'=>1943,
             'bd'=>'Le trésor de Rackham le Rouge',
             'dessinateur_id'=>4
            ],
        ]);
    }
}
