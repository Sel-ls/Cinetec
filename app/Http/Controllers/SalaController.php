<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Poltrona;


class SalaController extends Controller
{
    public function buscaCadastroSala(){
        return View('cadastroSalaPoltrona');
    }
    public function buscaCadastroPoltrona(){
        return View('cadastroSalaPoltrona');
    }

    public function cadastrarSala(Request $request){
        $dadossalas = $request->validate(
        [
            'nomeFilm' => 'string|required',
            'qtPolt' => 'string|required',
            'numSala' => 'string|required',
            'sessao' => 'string|required',
        ]
    );

    Sala::create($dadossalas);
    return Redirect::route('cadastro-sala', ['$dadossalas']);
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
