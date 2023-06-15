<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comments;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){

        $articles = Article::all();

        return view('blog', compact('articles'));
    }

    public function show($slug) {

        $article =  Article::where('slug', $slug)->first();

        if (!$article) {
            abort(404);
        }

        return view('blog-article', compact('article'));
    }


}
