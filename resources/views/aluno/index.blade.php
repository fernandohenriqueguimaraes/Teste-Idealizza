@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Lista de Alunos</b></div>

                    <div class="form-control">
                        <form action="{{ route('aluno.buscar') }}" method="get">

                            <div class="col-md-3 float-left">
                            <div class="form-group">
                                <label for="tipoBusca">Opção de Busca</label>
                                <select class="form-control" id="tipoBusca" name="tipoBusca">
                                    <option value="nome">Busca por Nome</option>
                                    <option value="cpf">Busca por CPF</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-9 float-left">
                                <div class="form-group">
                                <label for="valorBusca">Valor de Busca:</label>
                                <input type="text" class="form-control" id="valorBusca" name="valorBusca" placeholder="Se CPF, Digitar somente os números">
                                </div>
                            </div>

                                <div class="float-left col-md-12">
                            <div class="radio">
                                <label><input type="radio" name="ativo" value=1 checked>Alunos Ativos</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="ativo" value=0>Alunos Inativos</label>
                            </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" style="color:white" class="btn btn-info"><b>Buscar</b></button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="card-body">
                            <p>
                                <a class="btn btn-info" style="color:white" href="{{ route('aluno.adicionar') }}"><b>Adicionar</b></a>
                            </p>
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">CPF</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col" align="center">Editar</th>
                                    <th scope="col" align="center">Excluir</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($alunos as $aluno)
                                    <tr>
                                        <th scope="row"><a href="{{ route('aluno.detalhe', $aluno->id) }}">{{ $aluno->id }}</a></th>
                                        <td><a href="{{ route('aluno.detalhe', $aluno->id) }}">{{ $aluno->nome }}</a></td>
                                        <td><a href="{{ route('aluno.detalhe', $aluno->id) }}">{{ $aluno->cpf }}</a></td>
                                        <td><a href="{{ route('aluno.detalhe', $aluno->id) }}">{{ $aluno->email }}</a></td>
                                        <td align="center"><a href="{{ route('aluno.editar', $aluno->id) }}"><i style="color:black" class="material-icons">create</i></a></td>
                                        <td align="center"><a href="javascript:(confirm('Deseja realmente deletar esse registro?') ? window.location.href='{{ route('aluno.deletar', $aluno->id) }}' : false)"><i style="color:black" class="material-icons">delete_sweep</i></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="pagination justify-content-center">
                                {!! $alunos->links() !!}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection