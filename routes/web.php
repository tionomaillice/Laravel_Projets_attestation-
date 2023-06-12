<?php

use App\Http\Livewire\TypeAttestationsComp;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Demandes;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Utilisateurs;



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

Route::get('/pass', function () {
    $pass=bcrypt('camille');
    return $pass;
});

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
], function(){

    Route::get("/typeattestations", TypeAttestationsComp::class)->name("typeattestations");

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

        Route::get("/demandes", Demandes::class)->name("demandes");


    });


});
