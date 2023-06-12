<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Super_Administrateur;
use App\Models\Administrateur;
use App\Models\Attestation;
use App\Models\Demande;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       // $posts= Post::all();
       // dd( $posts);
        $posts= [
         'Informations',
         'Détails'
    ];

        return view('Université', compact('posts'));
    }
    //

    public function Etudiant()
    {

        $etudes= Etudiant::all();
        dd($etudes);
        return view('Etudiant', compact('etudes'));
    }
    public function Etud($id)
    {
        $etudes=[
            1 =>'ine_etudiant',
            2 =>'nom_etudiant',
            3 =>'prenom_etudiant',
            4 =>'email_etudiant',
            5 =>'password_etudiant',
            6 =>'numeros',
        ];
        $etude= $etudes[$id];
        return view('Etuds',compact('etude'));
    }
    public function Attestation()
    {

        $attests= Attestation::all();
        dd($attests);
        return view('Attestation', compact('attests'));
    }
     //
    public function Super_Administrateur()
    {
        $admins= Super_Administrateur::all();
        dd($admins);
        $admins=[
            'Creation_Des_Comptes',
        ];
        return view('Super_Administrateur', compact('admins'));
    }
    public function Administrateur()
    {
        $roles= Administrateur::all();
        dd($roles);

        return view('Administrateur',compact('roles'));
    }

    public function Connexion()
    {
        $connects= [
            'Login',
            'Sig in'

        ];
        return view('Connexion',compact('connects'));
    }
    public function FaQ()
    {

        return view('FaQ');
    }
    public function Demande()
    {
        $dems= Demande::all();
        dd($dems);

        return view('Demande',compact('dems'));
    }
}
