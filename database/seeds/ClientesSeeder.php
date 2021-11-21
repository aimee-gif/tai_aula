<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([

            'nome' => "Jackson",
            'sobrenome' => "Meires",
            'cliente_genero_id' => "2",
            'cidade' => "Xanxerê",
            'estado' => "Santa Catarina",
            'email' =>"jackson@gmail.com",
            'telefone' => "55+ (49) 99999-0000",
        ]);
    }
}
