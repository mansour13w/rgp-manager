<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\PersonnageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Menu', function(){

    return view('Menu');
});


Route::get('/personnages', [PersonnageController::class, 'list'])->name('personnages.list');
Route::get('/personnages/create', [PersonnageController::class, 'create'])->name('personnages.create');
Route::get('/personnages/{id}',[PersonnageController::class, 'show'])->name('personnages.show');
Route::post('/personnages', [PersonnageController::class, 'store'])->name('personnages.store');
Route::get('/inscription', [PersonnageController::class,'sign' ]);
Route::post('/inscription',[PersonnageController::class,'signok']);
Route::get('/utilisateurs', [PersonnageController::class, 'listadmin']);
Route::get('/connexion', [ConnexionController::class, 'formulaire']);
Route::post('/connexion', [ConnexionController::class, 'traitement']);
