<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
/*Route::get('/cuadro', function () {
    return view('cuadro');
});*/
//Route::get('/cuadro',[casosController::class, 'casos_covid']);

