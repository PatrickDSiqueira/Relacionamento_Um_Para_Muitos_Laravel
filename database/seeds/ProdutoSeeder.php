<?php

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
        DB::table('produtos')->insert([
            'nome'=>'Camisa Polo',
            'preco'=>100,
            'estoque'=>4,
            'categoria_id'=>1]);
        DB::table('produtos')->insert([
            'nome'=>'Bola',
            'preco'=>50,
            'estoque'=>74,
            'categoria_id'=>2]);
        DB::table('produtos')->insert([
            'nome'=>'mouse',
            'preco'=>20,
            'estoque'=>4,
            'categoria_id'=>3]);
        DB::table('produtos')->insert([
            'nome'=>'peteca',
            'preco'=>100,
            'estoque'=>4,
            'categoria_id'=>1]);
        DB::table('produtos')->insert([
            'nome'=>'mala',
            'preco'=>100,
            'estoque'=>4,
            'categoria_id'=>2]);
        DB::table('produtos')->insert([
            'nome'=>'celular',
            'preco'=>100,
            'estoque'=>4,
            'categoria_id'=>3]);
        DB::table('produtos')->insert([
            'nome'=>'moto',
            'preco'=>100,
            'estoque'=>4,
            'categoria_id'=>1]);
        DB::table('produtos')->insert([
            'nome'=>'pera',
            'preco'=>100,
            'estoque'=>4,
            'categoria_id'=>2]);
        DB::table('produtos')->insert([
            'nome'=>'tela',
            'preco'=>100,
            'estoque'=>4,
            'categoria_id'=>3]);
        DB::table('produtos')->insert([
            'nome'=>'Bolo',
            'preco'=>100,
            'estoque'=>4,
            'categoria_id'=>1]);
        DB::table('produtos')->insert([
            'nome'=>'Camisa Branca',
            'preco'=>1000,
            'estoque'=>40,
            'categoria_id'=>2]);
    }
}
