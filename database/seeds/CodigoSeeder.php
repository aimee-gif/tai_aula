<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodigoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codigos')->insert([
            'nomeproduto' => "Cartão de Visita",
            'siglaproduto' => "cartvisit",

        ]);

        DB::table('codigos')->insert([
            'nomeproduto' => "Arte Minimalista",
            'siglaproduto' => "artmin",

        ]);
    }
}
