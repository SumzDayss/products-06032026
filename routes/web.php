<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Pievienojiet aplikācijai jaunu maršrutu, kas saņem lietotāja ceļu '/about' un apstrādā to ar anonīmu funkciju izvadot 'h1' elementu ar tekstu "About this page" bez skata (view).
Route::get('/about',function(){
    return "<h1>About this page</h1>";
});