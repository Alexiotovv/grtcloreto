<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\paginasController;
use App\Http\Controllers\PublicacionesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\UserController;
Route::get('/storage-link', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
    symlink($targetFolder,$linkFolder);
});

Route::get('/', function () {
    return view('home');
});
Route::get('login',function(){
    return view('paneladmin');
})->name('login')->middleware('guest');

Route::get('home',function(){
    return view('home');
})->middleware('auth')->name('home');

Route::get('register',function(){
    return view('register');
})->name('register');





//Paginas
Route::get('/nosotros',[paginasController::class, 'nosotros'])->name('nosotros');
Route::get('/home',[paginasController::class, 'home'])->name('home');
Route::get('/direcciones',[paginasController::class, 'direcciones'])->name('direcciones');
Route::get('/misionvision',[paginasController::class, 'misionvision'])->name('misionvision');
Route::get('pagpublicaciones',[paginasController::class, 'pagpublicaciones'])->name('pagpublicaciones');
Route::get('/paneladmin',[paginasController::class, 'paneladmin'])->name('paneladmin');
//Apps
// Route::get('/appPublicaciones',[PublicacionesController::class, 'index'])->name('appPublicaciones');

Route::post('CreatePublicaciones',[PublicacionesController::class, 'create'])->name('Create.Publicaciones');
Route::get('CrearPublicaciones',[PublicacionesController::class, 'CrearPublicaciones'])->name('Crear.Publicaciones');
Route::post('ActualizarPublicaciones',[PublicacionesController::class, 'ActualizarPublicaciones'])->name('Actualizar.Publicaciones');
Route::get('EditarPublicaciones/{id}',[PublicacionesController::class, 'EditarPublicaciones'])->name('Editar.Publicaciones');
Route::get('appListPublicaciones',[PublicacionesController::class, 'ListarPublicaciones'])->name('appList.Publicaciones');

//DescargandoArchivos
Route::get('descargarfile/{NombreArchivo}',[PublicacionesController::class, 'DevuelveArchivo'])->name('descargar.file');

//USUARIOS
Route::post("register",[UserController::class,'create'])->name('Registro');
Route::post("verificanombre",[UserController::class,'verificanombre'])->name('verificanombre');
Route::post("verificaemail",[UserController::class,'verificaemail'])->name('verificaemail');
Route::post("login",[LoginController::class, 'login']);
Route::put('login', [LoginController::class, 'logout']);
Route::get("Usuarios",[UserController::class, "Usuarios"])->name('Usuarios');
Route::post("ActualizaUsuario",[UserController::class, "ActualizaUsuario"])->name('Actualiza.Usuario');
Route::get("ListarUsuarios",[UserController::class, "ListarUsuarios"])->name('Listar.Usuarios');
Route::post("ActualizaContrasena",[UserController::class, "ActualizaContrasena"])->name('Actualiza.Contrasena');
//END USUARIOS


/*Route::get('/cuadro', function () {
    return view('cuadro');
});*/
//Route::get('/cuadro',[casosController::class, 'casos_covid']);

