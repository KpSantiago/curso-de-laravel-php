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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('create', [EventController::class, 'createEvent']);

Route::get('event/create', [EventController::class, 'store']);

Route::get("contacts", function () {

    return view('contacts');
});