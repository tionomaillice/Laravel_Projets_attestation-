<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ["nom"=>"créer un compte administrateur"],
            ["nom"=>"modifier un compte administrateur"],
            ["nom"=>"supprimmer un compte administrateur"],

            ["nom"=>"consulter une attestation"],
            ["nom"=>"imprimer une attestation"],
            ["nom"=>"traiter les demandes"],

            ["nom"=>"deposer une demandes"],
            ["nom"=>"suivre l'etat de sa demandes"],

            ["nom"=>"gerer le tableau de bord"],
            
            ["nom"=>"verifier l'authenticité d'une attestation"],


        ]);
        //
    }
}
