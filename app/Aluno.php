<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'cpf', 'cidade', 'email', 'telefone', 'ativo'];

    public function cobrancas()
    {
        return $this->hasMany('App\Cobranca');
    }

    public function deletarCobrancas() {
        foreach ($this->cobrancas() as $cobranca) {
            $cobranca->delete();
        }
        return true;
    }

}
