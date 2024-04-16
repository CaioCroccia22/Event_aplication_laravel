<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Caio";
    $idade = 29;

    return view('welcome', ['nome' => $nome, 'idade' => $idade]);
});


Route::get('/contatos', function () {
    return view('contact');
});


