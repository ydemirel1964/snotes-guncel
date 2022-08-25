<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\articles;
use App\Models\comments;
use App\Models\categories;

class AboutMeController extends Controller
{
    public function index(){
        $categories = categories::get();
        $articles = articles::with('users')->with('comments')->orderBy('id', 'desc')->simplePaginate(10);
        $popularArticles = articles::with('users')->orderBy('articles.id', 'desc')->limit(5)->get();
        $tags = [];
        return view('aboutme', ['articles'=>$articles , 'categories'=>$categories, 'popularPosts'=>$popularArticles,'tags'=> $tags]);
    }
}
