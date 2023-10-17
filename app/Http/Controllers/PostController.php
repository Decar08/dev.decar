<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        // En tu controlador o en cualquier otro lugar donde necesites definir el array
        $posts = [
            'title1' => 'Título del Primer Elemento',
            'title2' => 'Título del Segundo Elemento',
            'title3' => 'Título del Tercer Elemento',
            'title4' => 'Título del Cuarto Elemento',
        ];

        // Pasa el array a la vista
        return view('blog')->with('posts', $posts);

    }
}
