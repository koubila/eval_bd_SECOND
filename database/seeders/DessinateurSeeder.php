<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DessinateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dessinateurs')->insert([
            [
             'nom'=>'Alberto Uderzo',
             'année_naissance'=>1927,
             'nationalité'=>'Français'
            ],
            [
             'nom'=>'Maurice De Bevere',
             'année_naissance'=>1923,
             'nationalité'=>'Belge'
            ],
            [
             'nom'=>'Rob Vel',
             'année_naissance'=>1909,
             'nationalité'=>'Français'
            ],
            [
             'nom'=>'Georges Rémi',
             'année_naissance'=>1907,
             'nationalité'=>'Belge'
            ],
        ]);
    }
}
