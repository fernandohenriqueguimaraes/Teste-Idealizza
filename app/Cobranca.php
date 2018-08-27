<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cobranca extends Model
{
    protected $fillable = ['agencia', 'conta', 'banco', 'mensalidade', 'aluno_id'];

    public function aluno()
    {
        return $this->belongsTo('App\Aluno');
    }

    public function adicionarAluno(Aluno $aluno)
    {
        return $this->aluno()->save($aluno);
    }
}
