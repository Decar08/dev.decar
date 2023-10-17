<?php

use Illuminate\Support\Facades\Route;

//dev.decar.com => Inicio
//dev.decar.com/contacto => contact
//dev.decar.com/blog => blog
//dev.decar.com/sobremi => sobremí


Route::view('/', 'welcome')->name('inicio');

Route::view('/sobremi', 'sobremi')->name('sobremi');

Route::view('/proyectos', 'proyectos')->name('proyectos');

Route::view('/contacto', 'contacto')->name('contact');

Route::view('/blog', 'blog')->name('blog');

