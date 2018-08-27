@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Aluno: {{ $aluno->nome }}</b></div>
                    <div class="card-body">
                        <p><b>CPF:</b> {{ $aluno->cpf }}</p>
                        <p><b>Cidade:</b> {{ $aluno->cidade }}</p>
                        <p><b>E-mail:</b> {{ $aluno->email }}</p>
                        <p><b>telefone:</b> {{ $aluno->telefone }}</p>

                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Banco</th>
                                <th scope="col">Agência</th>
                                <th scope="col">Número da Conta</th>
                                <th scope="col">Mensalidade</th>
                                <th scope="col" align="center">Editar</th>
                                <th scope="col" align="center">Excluir</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($aluno->cobrancas as $cobranca)
                                <tr>
                                    <th scope="row">{{ $cobranca->id }}</th>
                                    <td>{{ $cobranca->banco }}</td>
                                    <td>{{ $cobranca->agencia }}</td>
                                    <td>{{ $cobranca->conta }}</td>
                                    <td>{{ $cobranca->mensalidade }}</td>
                                    <td align="center"><a href="{{ route('cobranca.editar', $cobranca->id) }}"><i style="color:black" class="material-icons">create</i></a></td>
                                    <td align="center"><a href="javascript:(confirm('Deseja realmente deletar esse registro?') ? window.location.href='{{ route('cobranca.deletar', $cobranca->id) }}' : false)"><i style="color:black" class="material-icons">delete_sweep</i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <p>
                            <a class="btn btn-info" style="color:white" href="{{ route('cobranca.adicionar', $aluno->id) }}"><b>Adicionar Cobrança</b></a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection