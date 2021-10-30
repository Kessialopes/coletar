<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SeletController;
//pagina inicial
Route::get('/',[UserController::class,'inicio'])->name('inicio.page');
Route::post('/acesso',[UserController::class,'acesso'])
->name('acesso.user');
Route::get('/logout',[UserController::class,'logout'])
->name('logout');
//ALTERAR SENHA//solicitação
Route::get('/forgot',[UserController::class,'forgotPass'])
->name('esqueci.senha');
Route::post('/forgot',[UserController::class,'changePass'])
->name('mudar.senha');


//CADASTRO
Route::get('/cadastro',[UserController::class,'create'])
->name('cadastro.create');
Route::post('/cadastro',[UserController::class,'store'])
->name('cadastro.store');
//DASHBOARD
Route::get('/dashboard',[UserController::class,'dashboard'])
->middleware('auth')->name('dashboard');

//*******************COLETA SELETIVA*********************************
//LOGIN
Route::get('/lixao',[SeletController::class,'painel']);
Route::post('/lixo',[SeletController::class,'entrada']);
//Route::get('/seletiva',[SeletController::class,'painel'])->name('coleta.entrar');
//Route::post('/seletiva',[SeletController::class,'acesso'])->name('coleta.acesso');
Route::get('/logout',[SeletController::class,'sair'])->name('sair');
//CADASTRO
Route::get('/cadcoleta',[SeletController::class,'create'])->name('cad.create');
Route::post('/cadcoleta',[SeletController::class,'store'])->name('cad.store');
//DASHBOARD
    Route::get('/coletadash',[SeletController::class,'coletadash'])
    ->middleware('auth')->name('coletadash');


