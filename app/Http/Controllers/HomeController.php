<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\articles;
use App\Models\categories;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {       
            $categories = categories::get();
            $articles = articles::with('users')->with('comments')->orderBy('id', 'desc')->limit(5)->get();
            $popularArticles = articles::with('users')->orderBy('articles.id', 'desc')->limit(5)->get();
            $tags = [];
            return view('home', ['articles'=>$articles , 'categories'=>$categories, 'popularPosts'=>$popularArticles,'tags'=> $tags]);
    }
}
