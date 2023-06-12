<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutDemandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("statut_demandes")->insert([
            ["nom_statut_demande"=>"En attente"],
            ["nom_statut_demande"=>"En cours"],
            ["nom_statut_demande"=>"Terminée"],
            ["nom_statut_demande"=>"Rejetée"],
        ]);
        //
    }
}
