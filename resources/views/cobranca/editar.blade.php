@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><b>Editar Cobrança - Aluno: <a href="{{ route('aluno.detalhe', $cobranca->aluno->id) }}">{{ $cobranca->aluno->nome }}</a></b></div>
                    <div class="card-body">

                        <form action="{{ route('cobranca.atualizar', $cobranca->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                                <label for="banco">Banco</label>
                                <input type="text" name="banco" class="form-control {{ $errors->has('banco') ? ' is-invalid' : '' }}" value="{{ $cobranca->banco }}">
                            @if ($errors->has('banco'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('banco') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="agencia">Agência</label>
                                <input type="number" name="agencia" class="form-control {{ $errors->has('agencia') ? ' is-invalid' : '' }}" value="{{ $cobranca->agencia }}">
                            @if ($errors->has('agencia'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('agencia') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="conta">Conta</label>
                                <input type="number" name="conta" class="form-control {{ $errors->has('conta') ? ' is-invalid' : '' }}" value="{{ $cobranca->conta }}">
                            @if ($errors->has('conta'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('conta') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group">
                                <label for="mensalidade">Mensalidade</label>
                                <input type="number" name="mensalidade" class="form-control {{ $errors->has('mensalidade') ? ' is-invalid' : '' }}" value="{{ $cobranca->mensalidade }}">
                            @if ($errors->has('mensalidade'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mensalidade') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <button class="btn btn-info" style="color:white"><b>Editar Cobrança</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection