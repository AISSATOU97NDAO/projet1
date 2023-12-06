<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\ApprenantController;
use App\http\controllers\FormationController;

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

Route::get('/apprenant', function () {
    return view('apprenant');
});


Route::get('/liste-apprenants', ApprenantController::class .'@index');

Route::get('/liste-formations', FormationController::class .'@index');