<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Sessao;
use App\Models\Poltrona;
use App\Models\Filme;


class SalaSessaoController extends Controller
{
    public function buscaCadastroSala(){
        $dadosFilmes = Filme::query();
        $dadosFilmes = $dadosFilmes->get();
        return View('cadastroSalaSessao',['dadosfilme'=>$dadosFilmes]);
    }
    
    public function cadastrarSala(Request $request){
        $dadosSalas = $request->validate([
            'nomeFilme' => 'string|required',
            'qtPolt' => 'string|required',
            'numSala' => 'string|required',
        ]);
        Sala::create($dadosSalas);
        
        $dadosSessao = $request->validate([
            'numSala' => 'string|required',
            'nomeFilme' => 'string|required',
            'timeSessao' => 'string|required',
            'dateSessao' => 'string|required',
        ]);
        Sessao::create($dadosSessao);

        $col = ['1','2','3','4','5','6','7','8','9','10','11','12'];
        $fila = ['a','b','c','d','e','f','g','h','i','j'];
        if($request->qtPolt == 100){
            for ($c=0; $c < 10 ; $c++) {
                for ($f=0; $f < 10 ; $f++) {

                    $dadosPoltronas = $request->validate([
                        'numSala' => 'string|required',
                    ]);
                    $dadosPoltronas = $dadosPoltronas + [
                        'posicaoPolt' => $col[$c] . $fila[$f],
                        'statusPolt' => 'À venda',
                        'sessao' => $request->dateSessao . ' | ' . $request->timeSessao,
                    ];
                    Poltrona::create($dadosPoltronas);
                }
            }
        }else if($request->qtPolt == 96){
            for ($c=0; $c < 12 ; $c++) {
                for ($f=0; $f < 8 ; $f++) {

                    $dadosPoltronas = $request->validate([
                        'numSala' => 'string|required',
                    ]);
                    $dadosPoltronas = $dadosPoltronas + [
                        'posicaoPolt' => $col[$c] . $fila[$f],
                        'statusPolt' => 'À venda',
                        'sessao' => $request->dateSessao . ' | ' . $request->timeSessao,
                    ];
                    Poltrona::create($dadosPoltronas);
                }
            }
        }else if($request->qtPolt == 80){
            for ($c=0; $c < 8 ; $c++) {
                for ($f=0; $f < 10 ; $f++) {

                    $dadosPoltronas = $request->validate([
                        'numSala' => 'string|required',
                    ]);
                    $dadosPoltronas = $dadosPoltronas + [
                        'posicaoPolt' => $col[$c] . $fila[$f],
                        'statusPolt' => 'À venda',
                        'sessao' => $request->dateSessao . ' | ' . $request->timeSessao,
                    ];
                    Poltrona::create($dadosPoltronas);
                }
            }
        }

        return Redirect::route('cadastro-filme');
    }

    public function cadastrarPoltrona(Request $request){
        $dadospoltronas = $request->validate(
        [
            'numSala' => 'string|required',
            'posicaoPolt' => 'string|required',
            'statusPolt' => 'string|required',
        ]
    );

    Poltrona::create($dadospoltronas);
    return Redirect::route('cadastro-poltrona', ['$dadospoltronas']);
    } 

    public function MostrarGerenciadorSala(Request $request){
        // $dadosfuncionarios = Funcionario::all();
        // dd($request->content);
        $dadossalas = Sala::query();
        $dadossalas->when($request->nomeFilm,function($query, $nomefilme){
            $query->where('nomeFilm', 'like', '%' . $nomefilme . '%');
        });

        $dadossalas = $dadossalas->get();

        // return view('gerenciadorFuncionario');
        
        return view('gerenciadorSalaPoltrona',['dadossala'=>$dadossalas]);
    }

    public function MostrarGerenciadorPoltrona(Request $request){
        // $dadosfuncionarios = Funcionario::all();
        // dd($request->content);
        $dadospoltronas = Poltrona::query();
        $dadospoltronas->when($request->numSala,function($query, $numeroSala){
            $query->where('numSala', 'like', '%' . $numeroSala . '%');
        });

        $dadospoltronas = $dadospoltronas->get();

        // return view('gerenciadorFuncionario');
        
        return view('gerenciadorSalaPoltrona',['dadospoltrona'=>$dadospoltronas]);
    }

    public function ApagarSala(Sala $registroSala){
        $registroSala->delete();

        return Redirect::route('gerenciar-sala');
    }

    public function AlterarBancoSala(Sala $registroSala, Request $request){
        $dadossalas = $request->validate(
            [
                'nomeFilm' => 'string|required',
                'qtPolt' => 'string|required',
                'numSala' => 'string|required',
                'sessao' => 'string|required',
            ]);

        $registroSala->fill($dadossalas);
        $registroSala->save();
        return Redirect::route('gerenciar-sala');
    }
      
}
