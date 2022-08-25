<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\articles;
use App\Models\categories;
use Illuminate\Support\Facades\Log;

class WriterProfileController extends Controller
{
    public function index($writer_id)
    {
        $userarticles = articles::with('users')->where('user_id', "$writer_id")->simplePaginate(10);
        $popularArticles = articles::with('users')->orderBy('articles.id', 'desc')->limit(5)->get();
        $categories=categories::get();
        return view('writerprofile', ['userarticles'=>$userarticles,'categories'=>$categories ,'popularPosts'=>$popularArticles,]);
    }
}
