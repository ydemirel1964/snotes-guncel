<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article_categories;
use App\Models\categories;
use App\Models\articles;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index($category_id)
    {
       $categories = categories::get();
       $article_categories = DB::table('articles')
        ->join('article_categories', 'articles.id', '=', 'article_categories.article_id')
        ->join('users', 'users.id', '=', 'articles.user_id')
        ->leftJoin('comments', 'comments.article_id', '=', 'articles.id')
        ->where('article_categories.category_id',$category_id)
        ->select('article_categories.article_id','articles.id','articles.content','articles.content_title','articles.content_description','articles.created_at','articles.user_id','users.name','comments.comment')
        ->simplePaginate(10);
        $category_name = categories::select("category")->where("id","$category_id")->get();
        $popularArticles = articles::orderBy('articles.created_at', 'desc')->limit(5)->get();
        return view('category', ['article_categories'=>$article_categories , 'popularPosts'=>$popularArticles,'category_name'=>$category_name[0]->category, 'categories'=>$categories]);
    }

    public function getUser($article_categories){
        foreach($article_categories as $article)
        {
            $userid = $article->articles->user_id;
            $user = User::where("id",$userid)->get();
            $article->name=$user[0]['name'];
            $article->id = $user[0]['id'];
        }
    }
}
