<?php

use App\Http\Livewire\TypeAttestationsComp;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Demandes;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EtudiantController;

use App\Http\Livewire\Utilisateurs;
use App\Http\Livewire\AttestationsComp;
use App\Http\Livewire\ReceptionComp;
use App\Http\Livewire\TraitementComp;
use App\Http\Livewire\Vue;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/pass', function () {
//     $pass=bcrypt('camille');
//     return $pass;
// });

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group([
    "middleware" => ["auth", "auth.admin"],
    'as' => 'admin.'
], function(){

    Route::group([
        "prefix" => "habilitations",
        'as' => 'habilitations.'
    ], function(){

        Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");
    });

Route::group([
    "prefix" => "gestattestations",
    'as' => 'gestattestations.'
]
, function(){

    Route::get("/typeattestations", TypeAttestationsComp::class)->name("types.index");
    Route::get("/attestations", AttestationsComp::class)->name("app.index");
    Route::get("/reception", ReceptionComp::class)->name("add.index");
    Route::get("/taitement", TraitementComp::class)->name("opp.index");
 });


 Route::group([
    "prefix" => "duplicatas",
    'as' => 'duplicatas.'
], function(){


    Route::get("/reception1", ReceptionComp::class)->name("use.index");
    Route::get("/taitement1", TraitementComp::class)->name("cat.index");
 });
 Route::group([
    "prefix" => "tableau",
    'as' => 'tableau.'
], function(){


    Route::get("/vue", Vue::class)->name("view.index");

 });

});

Route::group([
    "middleware" => ["auth", "auth.etudiant"],
    'as' => 'etudiant.'
], function(){
    Route::group([
        "prefix" => "Retrait",
        'as' => 'Retrait.'
    ], function(){

        Route::get("/demandes", Demandes::class)->name("create.index");


    });


// Route::get('/demande/{id}/statut', [DemandeController::class, 'verifierStatut'])->name('demande.statut');



});

// Route::group([
//     "middleware" => ["auth", "auth.manager"],
//     'as' => 'manager.'
// ], function(){
//     Route::group([
//         "prefix" => "tableau",
//         'as' => 'tableau.'
//     ], function(){

//         Route::get("/vue", Vue::class)->name("view.index");


//     });




// });
