<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        // En tu controlador o en cualquier otro lugar donde necesites definir el array
        $posts = DB::table('post')->get();

        // Pasa el array a la vista
        return view('blog')->with('posts', $posts);

    }
}
