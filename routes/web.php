<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        return redirect(route('aluno.index'));
    } else {
        return view('auth.login');
    }
});

Auth::routes();

// Rotas de CRUD da entidade Aluno
Route::get('/aluno', ['uses'=>'AlunoController@index', 'as' => 'aluno.index']);
Route::get('/aluno/adicionar', ['uses'=>'AlunoController@adicionar', 'as' => 'aluno.adicionar']);
Route::post('/aluno/salvar', ['uses'=>'AlunoController@salvar', 'as' => 'aluno.salvar']);
Route::get('/aluno/editar/{id}', ['uses'=>'AlunoController@editar', 'as' => 'aluno.editar']);
Route::put('/aluno/atualizar/{id}', ['uses'=>'AlunoController@atualizar', 'as' => 'aluno.atualizar']);
Route::get('/aluno/deletar/{id}', ['uses'=>'AlunoController@deletar', 'as' => 'aluno.deletar']);
Route::get('/aluno/detalhe/{id}', ['uses'=>'AlunoController@detalhe', 'as' => 'aluno.detalhe']);

// Rota de busca da entidade Aluno
Route::get('/aluno/buscar', ['uses'=>'AlunoController@buscar', 'as' => 'aluno.buscar']);

// Rotas de CRUD da entidade Cobrança
Route::get('/cobranca/adicionar/{id}', ['uses'=>'CobrancaController@adicionar', 'as' => 'cobranca.adicionar']);
Route::post('/cobranca/salvar/{id}', ['uses'=>'CobrancaController@salvar', 'as' => 'cobranca.salvar']);
Route::get('/cobranca/editar/{id}', ['uses'=>'CobrancaController@editar', 'as' => 'cobranca.editar']);
Route::put('/cobranca/atualizar/{id}', ['uses'=>'CobrancaController@atualizar', 'as' => 'cobranca.atualizar']);
Route::get('/cobranca/deletar/{id}', ['uses'=>'CobrancaController@deletar', 'as' => 'cobranca.deletar']);

