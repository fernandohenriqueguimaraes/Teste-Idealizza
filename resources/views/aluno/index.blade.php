@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Lista de Alunos</b></div>
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
                                        <td><a href="{{ route('aluno.detalhe', $aluno->id) }}">{{ $aluno->email }}</a></td>
                                        <td><a href="{{ route('aluno.detalhe', $aluno->id) }}">{{ $aluno->endereco }}</a></td>
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