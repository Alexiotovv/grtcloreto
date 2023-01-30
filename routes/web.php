<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});
/*Route::get('/cuadro', function () {
    return view('cuadro');
});*/

/////////////////////////////////////////LOGIN AND REGISTER
Route::get('login',function(){
    return view('login');
})->name('login')->middleware('guest');

Route::get('home',function(){
    return view('home');
})->middleware('auth')->name('home');

Route::get('register',function(){
    return view('register');
})->name('register');

//USUARIOS
// Route::post("register",[UserController::class,'create'])->name('Registro');
// Route::post("verificanombre",[UserController::class,'verificanombre'])->name('verificanombre');
// Route::post("verificaemail",[UserController::class,'verificaemail'])->name('verificaemail');
// Route::post("login",[LoginController::class, 'login']);
// Route::put('login', [LoginController::class, 'logout']);

// Route::get("Usuarios",[UserController::class, "Usuarios"])->name('Usuarios');
// Route::post("ActualizaUsuario",[UserController::class, "ActualizaUsuario"])->name('Actualiza.Usuario');
// Route::get("ListarUsuarios",[UserController::class, "ListarUsuarios"])->name('Listar.Usuarios');
// Route::post("ActualizaContrasena",[UserController::class, "ActualizaContrasena"])->name('Actualiza.Contrasena');

