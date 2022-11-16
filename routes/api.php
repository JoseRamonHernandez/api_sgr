<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PlatillosController;
use App\Http\Controllers\Api\PedidosController;

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

Route::controller(PlatillosController::class)->group(function ()
{
    Route::get('/platillos', 'showAll');
    Route::post('/insertPlatillo', 'guardar');
    Route::put('/updatePlatillo/{id}', 'update');
    Route::delete('/deletePlatillo/{id}', 'destroy');
});

Route::controller(PedidosController::class)->group(function ()
{
    Route::get('/pedidos', 'showAll');
    Route::post('/insertPedido', 'save');
    Route::put('/updatePedido/{id}', 'update');
    Route::delete('/deletePedido/{id}', 'destroy');
});