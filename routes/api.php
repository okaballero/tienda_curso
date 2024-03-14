<?php

use App\Http\Controllers\api\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/setting', 'middleware' => 'auth:sanctum' ], function (){
    Route::match(['get', 'post'], 'consulta_version', [TestController::class, 'index'] );
});

Route::match(['post'], 'registra_usuario',[UserController::class, 'Registra' ]  );
