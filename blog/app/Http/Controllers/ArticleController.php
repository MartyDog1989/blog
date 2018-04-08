<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
   public function index()
   {
       $articles = Aritcle::all();
       return view('article.index', ['articles' => $articles]);
   } 
}
