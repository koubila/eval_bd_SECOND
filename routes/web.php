<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/personnages', [NavController::class, 'listPersonnages']);
Route::get('/dessinateurs', [NavController::class, 'listDessinateurs']);

Route::get('/modifierPersonnage/{id}', [NavController::class, 'modifierPersonnage']);
Route::post('/modifierPersonnage/{id}', [ActionController::class, 'modifierPersonnage']);


Route::get('/ajouterPersonnage', [NavController::class, 'ajouterPersonnage']);
Route::post('/ajouterPersonnage', [ActionController::class, 'ajouterPersonnage']);

Route::get('/ajouterDessinateur', [NavController::class, 'ajouterDessinateur']);
Route::post('/ajouterDessinateur', [ActionController::class, 'ajouterDessinateur']);

Route::post('/supprimer', [ActionController::class, 'supprimer']);