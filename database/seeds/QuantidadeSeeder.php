<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuantidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quantidades')->insert([
            'quantidades' => "1",
        ]);

        DB::table('quantidades')->insert([
            'quantidades' => "2",
        ]);

        DB::table('quantidades')->insert([
            'quantidades' => "3",
        ]);
    }
}
