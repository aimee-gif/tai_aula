<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
            'nomeproduto' => "Cartão de Visita",
            'tipoproduto' => "Digital",
            'fins' => "Empresarial",
            'pedido_tamanho_id' => "2"

        ]);
    }
}
