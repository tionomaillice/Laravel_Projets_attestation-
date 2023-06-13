<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demandes;


class EtudiantController extends Controller
{
    public function demandes()
    {
        // Logique pour gérer les demandes d'étudiants

        // Par exemple, récupérer toutes les demandes d'étudiants depuis la base de données
        $demandes = Demandes::all();

        // Passer les demandes à la vue pour les afficher
        return view('etudiant.demandes', ['demandes' => $demandes]);
    }


    //
}
