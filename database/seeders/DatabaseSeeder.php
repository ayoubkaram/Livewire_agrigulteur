<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Employe::insert([
            ['emp_nss' => 'Dulhac', 'emp_nom' => 'agr_prn', 'agr_resid'=>'Arith'],
            ['emp_nss' => 'Dulhac', 'emp_nom' => 'agr_prn', 'agr_resid'=>'Arith'],
            ['emp_nss' => 'Dulhac', 'emp_nom' => 'agr_prn', 'agr_resid'=>'Arith'],
            ['emp_nss' => 'Dulhac', 'emp_nom' => 'agr_prn', 'agr_resid'=>'Arith'],
            ['emp_nss' => 'Dulhac', 'emp_nom' => 'agr_prn', 'agr_resid'=>'Arith'],

        ]);
    }
}
