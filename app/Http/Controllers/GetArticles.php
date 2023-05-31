<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class GetArticles extends Controller
{
  public function index() {
      return dd(Articles::all());
  }
}
