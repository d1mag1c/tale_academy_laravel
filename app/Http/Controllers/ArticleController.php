<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

  public function index() {

      return 'В блоге ' .Article::count(). ' статей, ' .Article::where('image', null)->count(). ' из них без обложек';
  }
}
