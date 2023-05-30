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

/*Filme*/
Route::get('/cadastro-filme', [filmeController::class,'buscaCadastroFilme'])->name('buscar-cadastro-filme');
Route::post('/cadastro-filme', [filmeController::class,'CadastrarFilme'])->name('cadastro-filme');

Route::get('/gerenciar-filme', [filmeController::class,'MostrarGerenciadorFilme'])->name('gerenciar-filme');
Route::delete('/gerenciar-filme/{registroFilme}',[filmeController::class,'ApagarFilme'])->name('apagar-filme');
Route::put('/gerenciar-filme/{registroFilme}',[filmeController::class,'AlterarBancoFilme'])->name('alterar-banco-filme');

/*Sala*/
Route::get('/cadastro-sala', [salapoltronaController::class,'buscaCadastroSala'])->name('buscar-cadastro-sala');
Route::post('/cadastro-sala', [salapoltronaController::class,'cadastrarSala'])->name('cadastro-sala');

Route::get('/gerenciar-sala', [salapoltronaController::class,'MostrarGerenciadorSala'])->name('gerenciar-sala');
Route::delete('/gerenciar-sala/{registroSala}',[salapoltronaController::class,'ApagarSala'])->name('apagar-sala');
Route::put('/gerenciar-sala/{registroSala}',[salapoltronaController::class,'AlterarSala'])->name('alterar-banco-sala');

/*Poltrona*/
Route::get('/cadastro-poltrona', [salapoltronaController::class,'buscaCadastroPoltrona'])->name('buscar-cadastro-poltrona');
Route::post('/cadastro-poltrona', [salapoltronaController::class,'cadastrarPoltrona'])->name('cadastro-poltrona');

Route::get('/gerenciar-poltrona', [salapoltronaController::class,'MostrarGerenciadorPoltrona'])->name('gerenciar-poltrona');
// Route::delete('/gerenciar-poltrona/{registroPoltrona}',[salapoltronaController::class,'ApagarPoltrona'])->name('apagar-poltrona');
Route::put('/gerenciar-poltrona/{registroPoltrona}',[salapoltronaController::class,'AlterarPoltrona'])->name('alterar-banco-poltrona');