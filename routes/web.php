<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlgoController;
use App\Http\Controllers\SalaSessaoController;
use App\Http\Controllers\filmeController;

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
    return view('inicio');
});
Route::get('/', [filmeController::class,'MostrarFilme'])->name('mostrar-filme');

/*Filme*/
Route::get('/cadastro-filme', [filmeController::class,'buscaCadastroFilme'])->name('buscar-cadastro-filme');
Route::post('/cadastro-filme', [filmeController::class,'CadastrarFilme'])->name('cadastro-filme');

Route::delete('/gerenciar-filme/{registroFilme}',[filmeController::class,'ApagarFilme'])->name('apagar-filme');
Route::put('/gerenciar-filme/{registroFilme}',[filmeController::class,'AlterarBancoFilme'])->name('alterar-banco-filme');

/*Sala*/
Route::get('/cadastro-salasessao', [SalaSessaoController::class,'buscaCadastroSala'])->name('buscar-cadastro-salasessao');
Route::post('/buscar-sala', [SalaSessaoController::class,'buscaSala'])->name('buscar-salasessao');
Route::post('/cadastro-salasessao', [SalaSessaoController::class,'cadastrarSala'])->name('cadastro-salasessao');

Route::get('/gerenciar-sala', [SalaSessaoController::class,'MostrarGerenciadorSala'])->name('gerenciar-sala');
Route::delete('/gerenciar-sala/{registroSala}',[SalaSessaoController::class,'ApagarSala'])->name('apagar-sala');
Route::put('/gerenciar-sala/{registroSala}',[salapoltronaController::class,'AlterarSala'])->name('alterar-banco-sala');

/*Poltrona*/
Route::get('/cadastro-poltrona', [SalaSessaoController::class,'buscaCadastroPoltrona'])->name('buscar-cadastro-poltrona');
Route::post('/cadastro-poltrona', [SalaSessaoController::class,'cadastrarPoltrona'])->name('cadastro-poltrona');

Route::get('/gerenciar-poltrona', [SalaSessaoController::class,'MostrarGerenciadorPoltrona'])->name('gerenciar-poltrona');
// Route::delete('/gerenciar-poltrona/{registroPoltrona}',[salapoltronaController::class,'ApagarPoltrona'])->name('apagar-poltrona');
Route::put('/gerenciar-poltrona/{registroPoltrona}',[SalaSessaoController::class,'AlterarPoltrona'])->name('alterar-banco-poltrona');