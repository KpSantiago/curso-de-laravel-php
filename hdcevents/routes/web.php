<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// local onde definiremos as rotas para as views

Route::get('/', function () {
    $nome = "Alan";

    $array = ["Kauã", "José", 'Pereira', 'Santiago'];

    return view('welcome', ["nome" => $nome, "namesArray" => $array]);
});

Route::get("/contacts", function () {
    return view('contacts');
});