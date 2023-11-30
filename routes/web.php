<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;

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
});


Route::get('/registro', [registroController::class, 'index'])->name('registro');
Route::post('/registro', [registroController::class, 'postRegistro'])->name('postRegistro');
Route::get('/solicitud', [registroController::class, 'solicitud'])->name('solicitud');
Route::get('/nueva_solicitud', [registroController::class, 'nuevasSolicitudes'])->name('nuevasSolicitudes');
Route::get('/configurarSolicitudes', [registroController::class, 'configSolicitudes'])->name('configurarSolicitudes');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->rol==1){
            return view('dashboardAdmin');
        }else{
            return view('dashboard');
        }
    })->name('dashboard');
});
