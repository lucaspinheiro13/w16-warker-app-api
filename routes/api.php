<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiControllers\CidadeController; 
use App\Http\Controllers\ApiControllers\PostoController;
use App\Http\Controllers\UserController;
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

/**
 * Grupo de Rotas protegidas por Token
 */
Route::group(["middleware"=>["auth:sanctum"]],function(){
    Route::get('/get-me',[UserController::class,'getMe']);

    Route::post('/logout',[UserController::class,'logout']);

    //Cidades
    Route::apiResource('cidade',CidadeController::class);
    //Postos
    Route::apiResource('posto',PostoController::class);
});

Route::post('/login',[UserController::class,'index']);
Route::post('/register',[UserController::class,'register']);

