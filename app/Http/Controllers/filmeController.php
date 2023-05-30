<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Filme;

class filmeController extends Controller
{
    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    } 

    public function CadastrarFilme(Request $request){
        $dadosFilmes = $request->validate(
            [
            'nomeFilme' => 'string|required',
            'atoresFilme' => 'string|required',
            'dataLancamentoFilme' => 'string|required',
            'sinopseFilme' => 'string|required',   
            
        ]
    );

    //dd($dadosFilmes);

    // $file = $dadosFilmes['capaFilme'];
    // $path = $file->store('capa', 'public');
    // $dadosFilmes['capaFilme'] = $path;
    Filme::create($dadosFilmes);

    return Redirect::route('cadastro-filme');
    }

    public function MostrarGerenciadorFilme(Request $request){
        // $dadosfuncionarios = Funcionario::all();
        // dd($dadosfuncionarios);
        $dadosFilmes = Filme::query();
        $dadosFilmes->when($request->nomeFilme,function($query, $nomefilme){
            $query->where('nomeFilme', 'like', '%' . $nomefilme . '%');
        });

        $dadosFilmes = $dadosFilmes->get();

        // return view('gerenciadorFuncionario');
        
        return view('gerenciadorFilme',['dadosfilme'=>$dadosFilmes]);
    }

    public function ApagarFilme(Filme $registroFilme){
        $registroFilme->delete();

        return Redirect::route('gerenciar-filme');
    }

    
    public function AlterarBancoFilme(Filme $registroFilme, Request $request){
        $dadosFilmes = $request->validate(
            [
            'nomeFilme' => 'string|required',
            'atoresFilme' => 'string|required',
            'dataLancamentoFilme' => 'string|required',
            'sinopseFilme' => 'string|required',   
            
            ]);

        $registroFilme->fill($dadosFilmes);
        $registroFilme->save();
        return Redirect::route('gerenciar-filme');
    }

}
