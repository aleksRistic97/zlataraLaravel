<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PorudzbenicaController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {//ako je korisnik ulogovan moze da vrsi operacije dodavanja, azuriranja i brisanja
    Route::get('/profiles', function (Request $request) { //ovo nam omogucava da prikazemo ulogovanog korisnika
        return auth()->user();
    });
 
    //Route::resource('porudzbenice', PorudzbenicaController::class)->only(['update', 'store', 'destroy']);
    Route::put('porudzbenice/{id}', [PorudzbenicaController::class, 'update']);
   
    Route::delete('porudzbenice/{id}', [PorudzbenicaController::class, 'destroy']);
    Route::post('porudzbenice', [PorudzbenicaController::class, 'store']);
   
   

    Route::post('/logout', [AuthController::class, 'logout']); //ako je korisnik ulogovan moze da se odjavi
});


Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);


Route::get('porudzbenice', [PorudzbenicaController::class, 'index']);
Route::get('porudzbenice/{id}', [PorudzbenicaController::class, 'show']);


