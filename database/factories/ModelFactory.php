<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Aluno::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cpf' => $faker->numberBetween(10000000000, 99999999999),
        'cidade' => $faker->city,
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->phoneNumber,
        'ativo' => $faker->boolean
    ];
});


$factory->define(App\Cobranca::class, function (Faker $faker) {
    return [
        'banco' => $faker->randomElements(["Santander", "Caixa", "Bradesco", "Itaú", "Banco do Brasil"]),
        'agencia' => [$faker->randomDigit],
        'conta' => [$faker->bankAccountNumber()],
        'mensalidade' => [$faker->randomFloat(100, 900)]
    ];
});
