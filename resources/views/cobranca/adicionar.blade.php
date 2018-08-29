@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Adicionar Cobrança</b> - Aluno: <a href="{{ route('aluno.detalhe', $aluno->id) }}">{{ $aluno->nome }}</a></div>
                    <div class="card-body">

                    <form action="{{ route('cobranca.salvar', $aluno->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="aluno_id" value="{{ $aluno->id }}">
                        <div class="form-group">
                            <label for="banco">Banco</label>
                            <input type="text" name="banco" class="form-control {{ $errors->has('banco') ? ' is-invalid' : '' }}" placeholder="Banco do Aluno">
                        @if ($errors->has('banco'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('banco') }}</strong>
                                    </span>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="agencia">Agência</label>
                            <input type="number" name="agencia" class="form-control {{ $errors->has('agencia') ? ' is-invalid' : '' }}" placeholder="Agência do Aluno">
                        @if ($errors->has('agencia'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('agencia') }}</strong>
                                    </span>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="conta">Conta</label>
                            <input type="number" name="conta" class="form-control {{ $errors->has('conta') ? ' is-invalid' : '' }}" placeholder="Conta do Aluno">
                        @if ($errors->has('conta'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('conta') }}</strong>
                                    </span>
                        @endif
                        </div>

                        <div class="form-group">
                            <label for="mensalidade">Mensalidade</label>
                            <input type="number" name="mensalidade" class="form-control {{ $errors->has('mensalidade') ? ' is-invalid' : '' }}" placeholder="Mensalidade do Aluno">
                        @if ($errors->has('mensalidade'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mensalidade') }}</strong>
                                    </span>
                        @endif
                        </div>

                        <button class="btn btn-info" style="color:white"><b>Adicionar Cobrança</b></button>
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
@endsection