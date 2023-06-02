<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

  public function index() {

      return 'В блоге ' .Articles::count(). ' статей, ' .Articles::where('image', null)->count(). ' из них без обложек';
  }
}
