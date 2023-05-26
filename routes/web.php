<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlgoController;

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

/*Algo*/
Route::get('/cadastro-algo', [AlgoController::class,'buscaCadastroAlgo'])->name('buscar-cadastro-algo');
Route::post('/cadastro-algo', [AlgoController::class,'CadastrarAlgo'])->name('cadastro-algo');

Route::get('/gerenciar-algo', [AlgoController::class,'MostrarGerenciadorAlgo'])->name('gerenciar-algo');
Route::delete('/gerenciar-algo/{registroAlgo}',[AlgoController::class,'ApagarAlgo'])->name('apagar-algo');
Route::put('/gerenciar-algo/{registroAlgo}',[AlgoController::class,'AlterarBancoAlgo'])->name('alterar-banco-algo');
