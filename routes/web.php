<?php

use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(SolicitudController::class)->group(function(){

        // inicio de sesión
        Route::post('/', 'login_inicio')->name('ruta_login');
        Route::get('/', 'login')->name('ruta_login');

        // 1° parte del Registro (Datos personales)
        Route::get('/register', 'register')->name('ruta_registrar'); //GET:Se envían los datos por URL
        Route::post('/register', 'register')->name('ruta_registrar'); //POST:Se envían los datos de forma oculta

         // 2° parte del Registro (Datos de la empresa)
        Route::get('/register/cargo', 'registrar')->name('ruta_cargo');
        Route::post('/register/cargo', 'registrar')->name('ruta_cargo'); 

        //Ruta de la vista principal
        Route::post('/Principal', 'principal')->name('ruta_principal') ->middleware('auth') ;
        Route::get('/Principal', 'principal')->name('ruta_principal') ->middleware('auth') ;

        // cierre de sesión
        Route::post('/logout', 'logout')->name('auth.logout')->middleware('auth');


});
