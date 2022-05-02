<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAjoutProfil;
use App\Http\Controllers\ControllerProfil;
use App\Http\Controllers\ControllerService;
use App\Http\Controllers\LoginTest;
use App\Http\Controllers\ControllerLogout;
use App\Http\Controllers\ControllerModif;

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


Route::post('/ajoutProfil', [ControllerAjoutProfil::class, 'store']);


Route::post('service', [ControllerService::class, 'show']);

Route::get('/modifProfil/{id}', [ControllerModif::class, 'show']);

Route::post('/modifProfil/{id}', [ControllerModif::class, 'update']);

Route::get('/test', function () {
    return view('logintest');
});

Route::get('/change', function () {
    return view('changeroles');
});

Route::get('/profil/{id}', [ControllerProfil::class, 'show']);
Route::get('/ajoutProfil', [ControllerAjoutProfil::class, 'show']);
Route::get('/service', [ControllerService::class, 'show']);
Route::get('/profil/{id}', [ControllerProfil::class, 'show']);

Route::post('/profil/{id}', [ControllerProfil::class, 'destroy']);

Route::post('/test', [LoginTest::class, 'authenticate']);

Route::post('/service', [ControllerLogout::class, 'logout']);
