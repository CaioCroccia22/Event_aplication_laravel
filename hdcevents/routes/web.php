<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Caio";
    $idade = 29;

    $arr = [1,2,3,4,5];

    $nomes = ["Caio", "Maria", "Joao", "Paulo"];



    return view('main', [
        'nome' => $nome,
        'idade' => $idade, 
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

