<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Produto;
use App\Categoria;

Route::get('/categorias', function () {
    $cats = Categoria::all();
    if (count($cats) === 0) {
        echo "Você não possui categorias cadastradas";
    } else {
        foreach ($cats as $cat) {
            echo "<p>" . $cat->id . " - " . $cat->nome . "</p>";
        }
    }
});

Route::get('/produtos', function () {
    $prods = Produto::all();
    if (count($prods) === 0) {
        echo "<h4>Você não possui produtos cadastrados</h4>";
    } else {
        echo "<table>";
        echo "<theade><tr><td>Nome</td><td>Estoque</td><td>Preco</td><td>Categoria</td></tr></theade>";
        foreach ($prods as $p) {
            echo "<tr>";
                echo "<td>".$p->nome."</td>";
                echo "<td>".$p->estoque."</td>";
                echo "<td>".$p->preco."</td>";
                echo "<td>".$p->categoria->nome."</td>";
            echo "</tr>";
        }
    }
});
