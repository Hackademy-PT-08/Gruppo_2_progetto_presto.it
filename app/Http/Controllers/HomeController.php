<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories= Category::all();
        $lastArticles= Article::take(8)->get()->sortByDesc('created_at');
        return view('Home.index', ['lastArticles'=>$lastArticles], ['categories'=>$categories]);
    }
}
