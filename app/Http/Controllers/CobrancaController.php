<?php

namespace App\Http\Controllers;

use App\Cobranca;
use Illuminate\Http\Request;
use App\Aluno;
use Illuminate\Support\Facades\Session as Session;
use App\Http\Requests\CobracaRequest as CobrancaRequest;

class CobrancaController extends Controller
{
    /**
     * Cria uma instância do controlador
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Direciona para a página de cadastro de uma cobrança de um aluno
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function adicionar($id)
    {
        $aluno = Aluno::find($id);
        return view('cobranca.adicionar', compact('aluno'));
    }

    /**
     * Persiste uma cobrança a um aluno
     * @param $id
     * @param CobrancaRequest $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(CobrancaRequest $request, $id)
    {
        Cobranca::create($request->all());

        Session::flash('flash_message', [
            'msg' => 'Cobrança adicionada com sucesso!',
            'class' => 'alert-success'
        ]);
        return redirect()->route('aluno.detalhe', $id);
    }

    /**
     * Direciona para a página de edição de uma cobrança de um aluno
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $cobranca = Cobranca::find($id);

        if (!$cobranca) {
            Session::flash('flash_message', [
                'msg' => 'Cobrança não encontrada.',
                'class' => 'alert-danger'
            ]);
        }

        return view('cobranca.editar', compact('cobranca'));
    }

    /**
     * Atualiza uma cobrança
     * @param CobrancaRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(CobrancaRequest $request, $id)
    {
        $cobranca = Cobranca::find($id);
        $cobranca->update($request->all());
        Session::flash('flash_message', [
            'msg' => 'Cobrança atualizada com sucesso!',
            'class' => 'alert-success'
        ]);
        return redirect()->route('aluno.detalhe', $cobranca->aluno->id);
    }

    /**
     * Deleta uma cobrança
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        $cobranca = Cobranca::find($id);
        $cobranca->delete();

        Session::flash('flash_message', [
            'msg' => 'Cobrança deletada com sucesso!',
            'class' => 'alert-success'
        ]);
        return redirect()->route('aluno.detalhe', $cobranca->aluno->id);
    }
}
