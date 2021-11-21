<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([
            ProdutoSeeder::class,
            PedidoTamanhoSeeder :: class,
            PedidoSeeder::class,
            ClienteGeneroSeeder :: class,
            ClientesSeeder::class,
            CodigoSeeder::class,
            QuantidadeSeeder::class,
        ]);
    }
}
