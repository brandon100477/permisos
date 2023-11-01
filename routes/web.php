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
Route::get('/', function () {
        return view('welcome');
        })->middleware('auth');

Route::controller(SolicitudController::class)->group(function(){

        // inicio de sesión
        Route::post('/Login', 'login_inicio')->name('ruta_login');
        Route::get('/Login', 'login')->name('ruta_login');

        // 1° parte del Registro (Datos personales)
        Route::get('/Register', 'register')->name('ruta_registrar'); //GET:Se envían los datos por URL
        Route::post('Rregister', 'register')->name('ruta_registrar'); //POST:Se envían los datos de forma oculta

        // 2° parte del Registro (Datos de la empresa)
        Route::get('/Register/Cargo', 'registrar')->name('ruta_cargo');
        Route::post('/Register/Cargo', 'registrar')->name('ruta_cargo'); 

        //Ruta de la vista principal
        Route::post('/Registrado', 'principal')->name('ruta_principal');
        Route::get('/Registrado', 'principal')->name('ruta_principal')->middleware('auth');

        // cierre de sesión
        Route::post('/logout', 'logout')->name('auth.logout')->middleware('auth');

        // Ruta para un nuevo permiso empleados
        Route::post('/Permisos', 'permisos')->name('ruta_permisos')->middleware('auth');
        Route::get('/Permisos', 'permisos')->name('ruta_permisos')->middleware('auth');
        // Ruta para ver los permisos empleados
        Route::post('/Registros', 'registros')->name('ruta_registros')->middleware('auth');
        Route::get('/Registros', 'registros')->name('ruta_registros')->middleware('auth');

        // Ruta para ver los permisos de empleados a lideres
        Route::post('/Solicitud-lider/Revisar', 'solicitud')->name('ruta_solicitud')->middleware('auth');
        Route::get('/Solicitud-lider', 'solicitud')->name('ruta_solicitud')->middleware('auth');
        // Ruta para un nuevo permiso lider
        Route::post('/Permisos-lider', 'permisos')->name('ruta_permisos2')->middleware('auth');
        Route::get('/Permisos-lider', 'permisos')->name('ruta_permisos2')->middleware('auth');

        //Ruta para firmar
        Route::post('/Permisos/Firmado', 'firmado')->name('ruta_firmar')->middleware('auth');
        Route::get('/Permisos/Firmado', 'firmado')->name('ruta_firmar')->middleware('auth');
        //Ruta para previsualizar
        Route::post('/Permisos/Prevista', 'prevista')->name('ruta_prevista')->middleware('auth');
        Route::get('/Permisos/Prevista', 'prevista')->name('ruta_prevista')->middleware('auth');
        //Ruta para descargar PDF
        Route::post('/Registros/Descargar', 'descargar')->name('ruta_descargar')->middleware('auth');
        Route::get('/Registros/Descargar', 'descargar')->name('ruta_descargar')->middleware('auth');

        //Ruta para regresar a la respectiva vista principal
        Route::post('/Volver', 'volver_principal')->name('ruta_volver')->middleware('auth');
        Route::get('/Volver', 'volver_principal')->name('ruta_volver')->middleware('auth');

        //Ruta para aprovar o rechazar el permiso
        Route::post('/Solicitud-lider/Revisar', 'revisar')->name('ruta_revisar')->middleware('auth');
        Route::get('/Solicitud-lider/Revisar', 'revisar')->name('ruta_revisar')->middleware('auth');

        //Ruta para aprovar o rechazar el permiso
        Route::post('/Solicitud-lider/Revisar/Actualizar', 'actualizar')->name('ruta_actualizar')->middleware('auth');
        Route::get('/Solicitud-lider/Revisar/Actualizar', 'actualizar')->name('ruta_actualizar')->middleware('auth');
        

});

Route::get('/Principal', function () { //Ruta para volver a principal empleados
        return view('empleado.empleado');})->middleware('auth');

Route::get('/Solicitud-lider/volver', function () { //Ruta para volver a principal empleados
        return redirect('/Solicitud-lider');})->middleware('auth')->name('ruta_volver1');

Route::get('/Principal-lider', function () { //Ruta para volver a principal lider
        return view('jefe');})->middleware('auth');

Route::get('/Principal-director', function () { //Ruta para volver a principal director
        return view('jefe');})->middleware('auth');

Route::get('/Principal-gerente', function () { //Ruta para volver a principal director
        return view('jefe');})->middleware('auth');

Route::get('/Principal-vicepresidencia', function () { //Ruta para volver a principal director
        return view('jefe');})->middleware('auth');

Route::get('/Pruebas', function () { //Ruta para volver a principal empleados
        return view('prueba');})->middleware('auth');
