<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $nome = "Caio";
    $idade = 29;

    $arr = [1,2,3,4,5];



    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade, 
        'arr' => $arr]);
});


Route::get('/contatos', function () {
    return view('contact');
});


