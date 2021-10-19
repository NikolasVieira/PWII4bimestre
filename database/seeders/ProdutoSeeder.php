<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert(
            [
                'nome' => 'camiseta polo',
                'preco' => 100,
                'estoque' => 4,
                'categoria_id' => 1
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Boticario',
                'preco' => 80,
                'estoque' => 20,
                'categoria_id' => 3
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Fallout 4',
                'preco' => 35,
                'estoque' => 20,
                'categoria_id' => 5
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Impressora HP',
                'preco' => 250,
                'estoque' => 3,
                'categoria_id' => 2
            ]
        );
        DB::table('produtos')->insert(
            [
                'nome' => 'Ruffles Churrasco',
                'preco' => 6,
                'estoque' => 40,
                'categoria_id' => 4
            ]
        );
    }
}
