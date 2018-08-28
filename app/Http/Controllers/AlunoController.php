<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Http\Requests\AlunoRequest;
use Illuminate\Support\Facades\Session as Session;
use Illuminate\Support\Facades\Input;

class AlunoController extends Controller

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
     * Exibe a página com a lista de alunos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::paginate(10);

        return view('aluno.index', compact('alunos'));
    }

    /**
     * Exibe informações de um aluno específico
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function detalhe($id)
    {
        $aluno = Aluno::find($id);
        return view('aluno.detalhe', compact('aluno'));
    }

    /**
     * Exibe a página de adicionar aluno
     *
     * @return \Illuminate\Http\Response
     */
    public function adicionar()
    {
        return view('aluno.adicionar');
    }

    /**
     * Persiste um aluno adicionado na página de Adicionar
     * @param AlunoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(AlunoRequest $request)
    {
        Aluno::create($request->all());
        Session::flash('flash_message', [
            'msg' => 'Aluno adicionado com sucesso!',
            'class' => 'alert-success'
        ]);
        return redirect()->route('aluno.adicionar');
    }

    /**
     * Exibe a página de editar aluno
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $aluno = Aluno::find($id);

        if (!$aluno) {
            Session::flash('flash_message', [
                'msg' => 'Aluno não encontrado, gostaria de adicioná-lo?',
                'class' => 'alert-danger'
            ]);
        }

        return view('aluno.editar', compact('aluno'));
    }

    /**
     * Atualiza um aluno
     * @param AlunoRequest $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(AlunoRequest $request, $id)
    {
        Aluno::find($id)->update($request->all());
        Session::flash('flash_message', [
            'msg' => 'Aluno atualizado com sucesso!',
            'class' => 'alert-success'
        ]);
        return redirect()->route('aluno.index');
    }

    /**
     * Deleta um aluno
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id)
    {
        $aluno = Aluno::find($id);

        if (!$aluno->deletarCobrancas()) {
            Session::flash('flash_message', [
                'msg' => 'Não foi possível deletar este aluno!',
                'class' => 'alert-danger'
            ]);
            return redirect()->route('aluno.index');
        }

        $aluno->delete();

        Session::flash('flash_message', [
            'msg' => 'Aluno deletado com sucesso!',
            'class' => 'alert-success'
        ]);
        return redirect()->route('aluno.index');
    }

    /**
     * Exibe a página com a lista de alunos filtrada
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar(Request $request)
    {
        if (empty($request->get('valorBusca'))) {
            $campo = $request->get('tipoBusca');
            $valor = $request->get('valorBusca');
            $ativo = $request->get('ativo');
            $query = Aluno::where($campo, 'like', '%'.$valor.'%');
            if ($ativo == 1) {
                $query->where('ativo', '=', 1);
            } else {
                $query->where('ativo', '=', 0);
            }

            $alunos = $query->paginate(10);
            return redirect()->route('aluno.index', compact('alunos'));

        } else {
            return $this->index();
        }
    }

}
