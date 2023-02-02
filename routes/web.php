<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginasController;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
Route::get('/nosotros',[paginasController::class, 'nosotros'])->name('nosotros');
Route::get('/home',[paginasController::class, 'home'])->name('home');
/*Route::get('/cuadro', function () {
    return view('cuadro');
});*/
//Route::get('/cuadro',[casosController::class, 'casos_covid']);

