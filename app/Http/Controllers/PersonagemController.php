<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Arma;
use App\Models\Personagem;


class PersonagemController extends Controller
{
    /**
     * Método responsável por direcionar a tela de cadastro de um personagem
     * 
     * @param \Illuminate\Http\Request $req: requisição http que contem os dados do formulário
     * 
     * @return Retorna a tela de cadastro de personagem
     */
    public function cadastro(Request $request)
    {
        $per = $request->query('per');  // Obtém o valor de 'per' da query string
        $armas = Arma::all();
        return view('personagem.cadastrar', compact('armas', 'per'));
    }

    /**
     * Método responsável por cadastrar no banco um novo personagem
     *@param \Illuminate\Http\Request $req: requisição http que contem os dados do formulário
     *
     *@return  Retorna a tela de listar os personagens cadastros. Caso ocorra falha irá retornar a tela para selecionar o personagem a ser criado.
     */
    public function novo(Request $req)
    {
        $personagem = new Personagem();
        $personagem->nome = $req->nome;
        $personagem->idade = $req->idade;
        $personagem->descricao = $req->descricao;
        $personagem->id_arma_primaria = $req->id_arma_primaria;
        $personagem->id_mochila = 1;
        $personagem->nivel = 0;

        $per = $req->query('per');
        if ($per == "Mago") {
            $personagem->poder = $req->poder + 2;
            $personagem->forca = $req->forca;
            $personagem->vitalidade = $req->vitalidade;
            $personagem->destreza = $req->destreza;
        } else if ($per = "Guerreiro") {
            $personagem->poder = $req->poder;
            $personagem->forca = $req->forca + 2;
            $personagem->vitalidade = $req->vitalidade;
            $personagem->destreza = $req->destreza;
        } else if ($per = "Arqueiro") {
            $personagem->poder = $req->poder;
            $personagem->forca = $req->forca;
            $personagem->vitalidade = $req->vitalidade;
            $personagem->destreza = $req->destreza + 2;
        } else if ($per = "Monge") {
            $personagem->poder = $req->poder;
            $personagem->forca = $req->forca;
            $personagem->vitalidade = $req->vitalidade;
            $personagem->destreza = $req->destreza + 3;
        } else if ($per = "Druida") {
            $personagem->poder = $req->poder;
            $personagem->forca = $req->forca;
            $personagem->vitalidade = $req->vitalidade + 2;
            $personagem->destreza = $req->destreza;
        } else if ($per = "Necromante") {
            $personagem->poder = $req->poder + 3;
            $personagem->forca = $req->forca;
            $personagem->vitalidade = $req->vitalidade;
            $personagem->destreza = $req->destreza;
        }

        if ($personagem->save()) {
            return $this->listar();
        } else {
            return view("personagem.cadastro");
        }
    }

    /**
     * Método para acessar a tela de listagem de personagens. Esse método carrega todos os personagens e passa para a tela que irá listar os personagens
     * 
     * @return Retorna a tela que lista os personagems
     */
    public function listar()
    {
        $personagens = Personagem::all(); // Buscar todos os registros da tabela "personagens"
        return view('personagem.listar', compact('personagens'));
    }

    /**
     * Método para acessar a tela de alteração de personagem
     * @param int $id: Id do personagem que deverá ser alterado e passado as informações para a tela de alteração
     * 
     * @return Retorna a tela que contém o formulário para atualizar os dados do personagem
     */
    public function telaAlteracao($id)
    {
        $armas = Arma::all();
        $personagem = Personagem::find($id); // find busca o atributo de chave primária
        return view("personagem.alterar", ["personagem" => $personagem, "armas" => $armas]);
    }

    /**
     * Método para alterar informações de um personagem no banco de dados
     * 
     * @param \Illuminate\Http\Request $req: requisição http que contem os dados do formulário
     * @param int $id: ID do personagem a ser alterado
     * 
     * @return Retorna a lista de personagens ou redireciona para a página de cadastro em caso de falha 
     */
    public function alterar(Request $req, $id)
    {
        $personagem = Personagem::find($id);
        $personagem->nome = $req->nome;
        $personagem->idade = $req->idade;
        $personagem->descricao = $req->descricao;
        $personagem->id_arma_primaria = $req->id_arma_primaria;

        if ($personagem->save()) {
            return $this->listar();
        } else {
            return view("personagem.cadastro");
        }
    }

    /**
     * Método responsável por excluir um personagem do banco de dados
     * 
     * @param int $id: Corresponde ao ID do personagem que deseja ser excluído
     * 
     * @return Retorna a tela que lista os personagens cadastrados ou em caso de falha
     */
    public function excluir($id){
        $personagem = Personagem::find($id);
        
        if($personagem){
            $personagem->delete();
            return redirect()->route('personagem.listar');
        }else{
            return redirect()->route('home');
        }

    }

}
