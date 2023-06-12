<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeAttestationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("type_attestations")->insert([
            ["nom_type_attestations"=>"Licence"],
            ["nom_type_attestations"=>"Master"],
            ["nom_type_attestations"=>"Doctorat"],
        ]);
        //
        //
    }
}
