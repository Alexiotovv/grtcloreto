<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginasController;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
Route::get('/nosotros',[paginasController::class, 'nosotros'])->name('nosotros');
Route::get('/home',[paginasController::class, 'home'])->name('home');
Route::get('/direcciones',[paginasController::class, 'direcciones'])->name('direcciones');
Route::get('/misionvision',[paginasController::class, 'misionvision'])->name('misionvision');
Route::get('/publicaciones',[paginasController::class, 'publicaciones'])->name('publicaciones');
/*Route::get('/cuadro', function () {
    return view('cuadro');
});*/
//Route::get('/cuadro',[casosController::class, 'casos_covid']);

