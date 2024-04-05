<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cadastro;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('/cadastrar', function (Request $request) {
    Cadastro::create([
        'nomeCliente' => $request -> nomeCliente,
        'cpfCliente' => $request -> cpfCliente,
        'marcaDispositivo' => $request -> marcaDispositivo,
        'modeloDispositivo' => $request -> modeloDispositivo,
        'defeitoDispositivo' => $request -> defeitoDispositivo
    ]);
    
    echo "Ordem cadastrada!";
});


