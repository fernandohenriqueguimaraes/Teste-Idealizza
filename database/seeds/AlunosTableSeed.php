<?php

use Illuminate\Database\Seeder;
use App\Aluno;
use App\Cobranca;
class AlunosTableSeed extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Aluno', 100)->create()->each(function (Aluno $aluno) {
            $cobranca = factory('App\Cobranca')->create();
            $cobranca->adicionarAluno($aluno);
        });
    }
}
