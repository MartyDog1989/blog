<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
   public function index()
   {
       $articles = Article::all();
       logger($articles);
       return view('article.index', ['articles' => $articles]);
   } 
}
