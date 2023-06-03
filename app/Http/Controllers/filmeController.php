<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Filme;

class filmeController extends Controller
{
    public function buscaCadastroFilme()
    {
        return View('cadastroFilme');
    }

    public function CadastrarFilme(Request $request)
    {
        $dadosFilmes = $request->validate(
            [
                'nomeFilme' => 'string|required',
                'atoresFilme' => 'string|required',
                'dataLancamento' => 'string|required',
                'sinopseFilme' => 'string|required',
                'capaFilme' => 'file|required',
                'bannerFilme' => 'file',
                'statusFilme' => 'string',
            ]
        );
        global $se;
        $se = true;
        $request->input('bannerFilme', function (){
            global $se;
            $se = false;
            return null;
        });

        if ($se) {
            $file = $dadosFilmes['bannerFilme'];
            $path = $file->store('banner');
            $dadosFilmes['bannerFilme'] = $path;
        }

        $file = $dadosFilmes['capaFilme'];
        $path = $file->store('capa');
        $dadosFilmes['capaFilme'] = $path;
        Filme::create($dadosFilmes);

        return Redirect::route('cadastro-filme');
    }

    public function MostrarFilme(Request $request){
        // $dadosfuncionarios = Funcionario::all();
        // dd($dadosfuncionarios);
        $dadosFilmes = Filme::query()->where('statusFilme', 'like', '%' . 1 . '%');
        // $dadosFilmes->when($request->nomeFilme,function($query, $nomefilme){
        //     $query->where('nomeFilme', 'like', '%' . $nomefilme . '%');
        // });

        $dadosFilmes = $dadosFilmes->get();
        // return view('gerenciadorFuncionario');
        
        return view('inicio',['dadosfilme'=>$dadosFilmes]);
    }

    public function ApagarFilme(Filme $registroFilme)
    {
        $registroFilme->delete();

        return Redirect::route('gerenciar-filme');
    }


    public function AlterarBancoFilme(Filme $registroFilme, Request $request)
    {
        $dadosFilmes = $request->validate(
            [
                'nomeFilme' => 'string|required',
                'atoresFilme' => 'string|required',
                'dataLancamentoFilme' => 'string|required',
                'sinopseFilme' => 'string|required',

            ]
        );

        $registroFilme->fill($dadosFilmes);
        $registroFilme->save();
        return Redirect::route('gerenciar-filme');
    }

}