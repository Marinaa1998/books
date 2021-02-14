<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\GenreController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| 
    GET  /api/writers - vrati mi sve pisce iz baze (u json formatu) - pozvace se metoda index WriterController - a
    GET /api/writers/{id} - vrati mi pisac sa zadatim id - jem - show metoda
    POST /api/writers - kreiraj pisca na osnovu tela zahteva - store
    PUT/PATCH /api/writers/{id} - izmeni pisca sa datim id -jem podacima koji se nalaze u telu zahteva - update
    DELETE /api/writers/{id} obrisi mi pisac sa zadatim id - jem - destroy
*/


Route::apiResources([
    'writers'=>WriterController::class,
    'genres'=>GenreController::class
]);