<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nomeproduto1' =>  "Post para mídias sociais",
            'tipoproduto1' => "Digital",
            'quantidadepedidos1' => "2 unidades",
            'estoque1' => "Há 14 unidades",
            'codigo1' => "post023",

        ]);
    }
}
