<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClienteGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("pt_BR");

        DB::table('cliente_genero')->insert(
       [
            [
            'genero' => "Feminino",
            'sigla' => "F",

            ],

            [
                'genero' => "Masculino",
                'sigla' => "M",

            ],

            [
                'genero' => "Outro",
                'sigla' => "Out",

            ],

            [
                'genero' => "Não quero informar",
                'sigla' => "N.Q.I",

                ]
       ]
            );

    }
}
