<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoltronaController extends Controller
{
    public function buscaCadastroPoltrona(){
        return View('cadastroPoltrona');
    }
}
