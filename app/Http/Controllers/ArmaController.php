<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arma;

class ArmaController extends Controller
{
    public function cadastro(Request $request)
    {
        return view('arma.cadastrar');
    }
    public function novo(Request $req)
    {
        $arma = new Arma();
        $arma->nome = $req->nome;
        $arma->dano = $req->dano;
        $arma->defesa = $req->defesa;
        $arma->peso = $req->peso;
        $arma->tipo = $req->tipo;
        $arma->estilo = $req->estilo;

        if ($arma->save()) {
            return $this->listar();
        } else {
            return view("arma.cadastro");
        }
    }

    public function listar()
    {
        $armas = Arma::all(); // Buscar todos os registros da tabela "armas"
        return view('arma.listar', compact('armas'));
    }

    public function telaAlteracao($id)
    {
        $armas = Arma::find($id);
        return view("arma.alterar", ["arma" => $armas]);
    }

    public function alterar(Request $req, $id)
    {
        $arma = Arma::find($id);
        $arma->nome = $req->nome;
        $arma->dano = $req->dano;
        $arma->defesa = $req->defesa;
        $arma->peso = $req->peso;
        $arma->tipo = $req->tipo;
        $arma->estilo = $req->estilo;

        if ($arma->save()) {
            return $this->listar();
        } else {
            return view("arma.cadastro");
        }
    }
    public function excluir($id){
        $arma = Arma::find($id);
        
        if($arma){
            $arma->delete();
            return redirect()->route('arma.listar');
        }else{
            return redirect()->route('arma.cadastro');
        }
    }

}
