<?php

use Illuminate\Database\Seeder;

class AlunosTableSeed extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Aluno::class, 100)->create()->each(function ($aluno) {
            factory(App\Cobranca::class)->create([
                'aluno_id' => [$aluno->id]
            ])->make();
        });


    }
}
