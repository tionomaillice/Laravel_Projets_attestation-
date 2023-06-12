<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom_permissions"=> array_rand(["créer un compte administrateur","modifier un compte administrateur","supprimer un compte administrateur",
            "consulter une attestation","imprimer une attestation","ttraiter les demandes","deposer une demandes","suivre l'etat de sa demande",
        "verifier l'authenticité d'une attestation","gerer le tableau de bord"],1)
        ];
    }
}
