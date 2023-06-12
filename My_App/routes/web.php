<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Attestation;
use App\Models\Type_Attestation;

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

//Route::get('/', [PostController::class, 'index']);
//Route::get('/posts/{id}', [PostController::class, 'show']);
//Route::get('/Etudiant', [PostController::class, 'Etudiant']);
//Route::get('/Etudiant', [PostController::class, 'Etudiant']);
//Route::get('/Etudiant/{id}', [PostController::class, 'Etud']);
//Route::get('/Demande', [PostController::class, 'Demande']);
//Route::get('/Super_Administrateur', [PostController::class, 'Super_Administrateur']);
//Route::get('/Administrateur', [PostController::class, 'Administrateur']);
//Route::get('/Attestation', [PostController::class, 'Attestation']);
//Route::get('/Connexion', [PostController::class, 'Connexion']);
Route::get('/', function(){
    return view('welcome');
});
Route::get('/attestations', function(){
    return Attestation::with("type")->paginate('5');
});
Route::get('/types', function(){
    return Type_Attestation::paginate('5');
});


