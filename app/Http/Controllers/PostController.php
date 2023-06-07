<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){

        $articles = Article::all();

        return view('blog', compact('articles'));
    }

    public function show($slug) {

        $post =  Article::where('slug', $slug)->first();

        return view('blog-post', compact('post'));
    }
}
