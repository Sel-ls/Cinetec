<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessaoController extends Controller
{
    public function buscaCadastroSessao(){
        return View('cadastroSessao');
    } 

    public function CadastrarSessao(Request $request){
        $dadosFilmes = $request->validate(
            [
            'numSala' => 'string|required',
            'nomeFilme' => 'string|required',
            'timeSessao' => 'string|required',
            'dateSessao' => 'string|required',   
            'statusSessao' => 'string|required',   
            
        ]
    );
    
    //dd($dadosFilmes);

    // $file = $dadosFilmes['capaFilme'];
    // $path = $file->store('capa', 'public');
    // $dadosFilmes['capaFilme'] = $path;
    Filme::create($dadosFilmes);

    return Redirect::route('cadastro-sessao');
    }

    public function MostrarGerenciadorSessao(Request $request){
        // $dadosfuncionarios = Funcionario::all();
        // dd($dadosfuncionarios);
        $dadosSessao = Sessao::query();
        $dadosSessao->when($request->nomeSessoa,function($query, $nomeSessao){
            $query->where('numSala', 'like', '%' . $nomeSessao . '%');
        });

        $dadosSessao = $dadosSessao->get();

        // return view('gerenciadorFuncionario');
        
        return view('gerenciadorSessao',['dadosSessao'=>$dadosSessao]);
    }
}
