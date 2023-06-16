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
            ["nom"=>"ajouter un administrateur"],
            ["nom"=>"modifier un compte administrateur"],
            ["nom"=>"supprimer un compte administrateur"],

            ["nom"=>"ajouter un retrait"],
            ["nom"=>"modifier un retrait"],
            ["nom"=>"editer un retrait"],


            ["nom"=>"ajouter une attestion"],
            ["nom"=>"modifier consulter une attestation"],
            ["nom"=>" editer une attestation"],
            ["nom"=>"modifier un consulter une attestion"],
            ["nom"=>"imprimer une attestation"],
            ["nom"=>"verifier l'authenticité d'une attestation"],

            ["nom"=>"deposer une demandes"],
            ["nom"=>"suivre une demandes"]



        ]);
        //
    }
}
