<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PedidoTamanhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedido_tamanho')->insert(
       [
            [
                 'tamanho' => "1000 X 1000",
                 'unimedida' => "PX",

            ],

            [
                'tamanho' => "1080 X 1080",
                'unimedida' => "PX",

            ],

            [
                'tamanho' => "1010 X 1080",
                'unimedida' => "PX",

            ],

            [
                'tamanho' => "2010 X 1090",
                'unimedida' => "PX",

            ],

            [
                'tamanho' => "2000 X 2000",
                'unimedida' => "PX",

            ],

                [
                    'tamanho' => "3000 X 3000",
                    'unimedida' => "PX",

                    ]
       ]
            );
    }
}
