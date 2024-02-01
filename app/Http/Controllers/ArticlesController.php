<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        // getting all collection elements
        // $articles = Article::all();
        // return $articles;

        // getting all collection elements
        // $articles = Article::where('id', 5)->get();

        // $articles = Article::where('user_id', 10)
        // ->where('is_published', true)
        // ->count();

        $articles = Article::all();
        return $articles;
    
      }  
}
