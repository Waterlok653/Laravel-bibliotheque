<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EmpruntsController;
use App\Http\Controllers\ExemplairesController;
use App\Http\Controllers\LivresController;
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
//Route::get('/', [AuteursController::class, 'getAll']);
Route::get('/', function () {
    return view('welcome');
});
Route::post('/', function () {
    return view('welcome');
});

Route::get('/clientAdd', function () {
    return view('clientAdd');
});

Route::get('/empruntsAdd', function () {
    return view('empruntsAdd');
});

Route::get('/livreAdd', function () {
    return view('livreAdd');
});

Route::get('/exemplaireAdd', function () {
    return view('exemplaireAdd');
});

Route::post('/clientAdd', [ClientsController::class, 'create']);

Route::post('/empruntsAdd', [EmpruntsController::class, 'controleClient']);

Route::post('/livreAdd', [LivresController::class, 'create']);

Route::post('/exemplaireAdd', [ExemplairesController::class, 'create']);

Route::get('/clientListe', [ClientsController::class, 'getAll']);

Route::get('/empruntsListe', [EmpruntsController::class, 'getAll']);

Route::get('/exemplairesListe', [ExemplairesController::class, 'getAll']);

Route::get('/livresListe', [LivresController::class, 'getAll']);

Route::get('/clientDelete/{id}', [ClientsController::class, 'destroy']);

Route::get('/empruntsDelete/{id}', [EmpruntsController::class, 'destroy']);

Route::get('/exemplairesDelete/{id}', [ExemplairesController::class, 'destroy']);

Route::get('/livresDelete/{id}', [LivresController::class, 'destroy']);

Route::get('/clientEdit/{id}', [ClientsController::class, 'show']);

Route::post('/editClient/{id}', [ClientsController::class, 'edit']);

Route::get('/empruntsEdit/{id}', [EmpruntsController::class, 'show']);

Route::post('/editEmprunts/{id}', [EmpruntsController::class, 'edit']);

Route::get('/exemplairesEdit/{id}', [ExemplairesController::class, 'show']);

Route::post('/editExemplaires/{id}', [ExemplairesController::class, 'edit']);

Route::get('/livresEdit/{id}', [LivresController::class, 'show']);

Route::post('/editLivres/{id}', [LivresController::class, 'edit']);

Route::post('/empruntsContinus/{id}', 'App\Http\Controllers\EmpruntsController@empruntsContinus');

Route::post('/empruntsAdd2', [EmpruntsController::class, 'create']);