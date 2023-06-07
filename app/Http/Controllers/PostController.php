<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        return view('blog', ['articles' => Article::all() ]);
    }
}
