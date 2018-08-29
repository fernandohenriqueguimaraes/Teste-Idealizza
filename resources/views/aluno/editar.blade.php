@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Editar Aluno</b></div>
                    <div class="card-body">

                        <form action="{{ route('aluno.atualizar', $aluno->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <label for="aluno">Aluno</label>
                                <input type="text" name="nome" class="form-control {{ $errors->has('nome') ? ' is-invalid' : '' }}" value="{{ $aluno->nome }}">
                            @if ($errors->has('nome'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" class="form-control {{ $errors->has('cpf') ? ' is-invalid' : '' }}" value="{{ $aluno->cpf }}">
                            @if ($errors->has('cpf'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cpf') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" name="cidade" class="form-control {{ $errors->has('cidade') ? ' is-invalid' : '' }}" value="{{ $aluno->cidade }}">
                            @if ($errors->has('cidade'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cidade') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ $aluno->email }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" class="form-control{{ $errors->has('telefone') ? ' is-invalid' : '' }}" value="{{ $aluno->telefone }}">
                            @if ($errors->has('telefone'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="Ativo">Aluno Ativo:</label><br>
                                <input type="radio" name="ativo" value=1 checked="checked"> Ativo<br>
                                <input type="radio" name="ativo" value=0> Inativo<br>
                            </div>

                            <button class="btn btn-info" style="color:white"><b>Editar</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection