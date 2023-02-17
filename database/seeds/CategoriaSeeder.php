<?php

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
        DB::table('categorias')->insert(['nome'=>'Alimentos']);
        DB::table('categorias')->insert(['nome'=>'Esporte']);
        DB::table('categorias')->insert(['nome'=>'Diversão']);
    }
}
