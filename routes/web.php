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
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MailController;
//PAGINA INICIAL
Route::get('/',[LoginController::class,'inicio'])->name('inicio.page');
Route::get('/logDoador',[LoginController::class,'logdonate']);
Route::post('/acesso',[LoginController::class,'userlog'])
->name('acesso.user');
Route::get('/logout',[loginController::class,'logout'])
->name('logout');
//CADASTRO
Route::get('/cadastro',[UserController::class,'create'])
->name('cadastro.create');
Route::post('/cadastro',[UserController::class,'store'])
->name('cadastro.store');
//SENHA ATUALIZAÇÃO/EMAIL //INCOMPLETA
/*Route::get('/mail',function(){
	$user = user();
	$user->name = 'name';
	$user->email = 'email';
	//return new \App\Mail\sendMail($user);
	\Illuminate\Support\Facades\Mail::send(new \App\Mail\sendMail($user));
})*/
//DASHBOARD
Route::get('/dashboard',[UserController::class,'dashboard'])
->middleware('auth')->name('dashboard'); 
//*******************COLETA SELETIVA*********************************
//LOGIN
Route::get('/logColeta',[LoginController::class,'painel']);
Route::post('/logcoleta',[LoginController::class,'seletlog']);
//CADASTRO
Route::get('/cadcoleta',[SeletController::class,'create'])
->middleware('isSeletiva')->name('cad.create');
Route::post('/cadcoleta',[SeletController::class,'store'])->name('cad.store');
// EDIÇÃO DOS PONTOS DE COLETA
Route::get('/seletiva/edit/{id}',[SeletController::class,'edit'])
->middleware('isSeletiva')->name('editar');
Route::put('/seletiva/update/{id}',[SeletController::class,'update'])
->middleware('isSeletiva')->name('update');
//DASHBOARD
Route::get('/coletadash',[SeletController::class,'coletadash'])
->middleware('isSeletiva')->name('coletadash');
//****************************ROTAS DO MAPA***************************************
Route::get('/Home',[MapController::class,'index'])
->middleware('auth');
Route::get('/Home/seletiva/{id}',[MapController::class,'show'])
->middleware('auth')->name('mostrar');