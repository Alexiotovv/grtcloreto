<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginasController;
use App\Http\Controllers\PublicacionesController;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
//Paginas
Route::get('/nosotros',[paginasController::class, 'nosotros'])->name('nosotros');
Route::get('/home',[paginasController::class, 'home'])->name('home');
Route::get('/direcciones',[paginasController::class, 'direcciones'])->name('direcciones');
Route::get('/misionvision',[paginasController::class, 'misionvision'])->name('misionvision');
Route::get('/publicaciones',[paginasController::class, 'publicaciones'])->name('publicaciones');
Route::get('/paneladmin',[paginasController::class, 'paneladmin'])->name('paneladmin');


//Apps
// Route::get('/appPublicaciones',[PublicacionesController::class, 'index'])->name('appPublicaciones');

Route::post('CreatePublicaciones',[PublicacionesController::class, 'create'])->name('Create.Publicaciones');
Route::get('CrearPublicaciones',[PublicacionesController::class, 'CrearPublicaciones'])->name('Crear.Publicaciones');
Route::post('ActualizarPublicaciones',[PublicacionesController::class, 'ActualizarPublicaciones'])->name('Actualizar.Publicaciones');
Route::get('EditarPublicaciones/{id}',[PublicacionesController::class, 'EditarPublicaciones'])->name('Editar.Publicaciones');
Route::get('appListPublicaciones',[PublicacionesController::class, 'ListarPublicaciones'])->name('appList.Publicaciones');

/*Route::get('/cuadro', function () {
    return view('cuadro');
});*/
//Route::get('/cuadro',[casosController::class, 'casos_covid']);

