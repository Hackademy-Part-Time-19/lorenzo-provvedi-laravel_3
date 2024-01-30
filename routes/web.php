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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/home",function(){
    return view("pagina-home");
});


Route::get("/cards",function(){
    return view("pagina-cards");
});


Route::get("/registrazione",function(){
    return view("pagina-registrazione");
});


Route::get("/prodotto",function(){
    return view("pagina-prodotto");
});

Route::get("/articoli",function(){
    return view("pagina-articoli");
});