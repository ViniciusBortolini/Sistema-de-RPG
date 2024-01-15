<?php

use Illuminate\Support\Facades\Route;

//Rota que direciona a pagina inicial
use App\Http\Controllers\AppController;
Route::get('/', [AppController::class, 'index'])->name('home');


//-------Rotas de Personagem-------//
use App\Http\Controllers\PersonagemController;

//Rota que direciona para tela de cadastros
Route::get('/personagem/cadastro', [PersonagemController::class, 'cadastro'])->name('cadastro');

//Rota que direciona para a função que irá cadastrar um personagem
Route::post('/personagem/novo', [PersonagemController::class, 'novo'])->name('personagem.novo');

//Rota para listar todos os personagens
Route::get('/personagem', [PersonagemController::class, 'listar'])->name('personagem.listar');

//Rota para acessar a tela de alteração de personagem
Route::get('/personagem/alterar/{id}', [PersonagemController::class,'telaAlteracao'])->name('personagem.atualiza'); 

//Rota para alterar o cadastro do personagem
Route::post('/personagem/alterar/{id}', 
[PersonagemController::class,'alterar'])->name('personagem.alterar'); 

//Rota para excluir o personagem
Route::get('/personagem/excluir/{id}', 
[PersonagemController::class,'excluir'])->name('personagem.excluir'); 
