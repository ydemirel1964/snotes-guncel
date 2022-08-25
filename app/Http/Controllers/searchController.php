<?php

namespace App\Http\Controllers;
use App\Models\articles;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request)
    {
       $searchTerm = $request->searchTerm;
       $searchResult = articles::where("content_title","LIKE","%$searchTerm%")->get();
       $searchResult = articles::where(function ($query) use($searchTerm) {
         $query
           ->where('content_title', 'LIKE', '%' . $searchTerm . '%')
           ->orWhere('content', 'LIKE', '%' . $searchTerm . '%')
           ->orWhere('content_description', 'LIKE', '%' . $searchTerm . '%');
      })->paginate(10);
      return view('searchresult', ['searchTerm'=>"$searchTerm",'searchresult'=>$searchResult]);
    }
}
