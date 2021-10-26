<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categorias')->insert(['nome' => 'Roupas']);
        DB::table('categorias')->insert(['nome' => 'Eletronicos']);
        DB::table('categorias')->insert(['nome' => 'Perfumes']);
        DB::table('categorias')->insert(['nome' => 'Alimentos']);
        DB::table('categorias')->insert(['nome' => 'Informatica']);
    }
}
