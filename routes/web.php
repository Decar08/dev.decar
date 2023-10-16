<?php

use Illuminate\Support\Facades\Route;

//dev.decar.com => Inicio
//dev.decar.com/contacto => contact
//dev.decar.com/blog => blog
//dev.decar.com/sobremi => sobremí


Route::view('/', 'welcome');

Route::view('/contacto', 'contacto');

Route::view('/blog', 'blog');

Route::view('/sobremi', 'sobremi');
