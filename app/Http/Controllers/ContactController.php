<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\contacts;

class ContactController extends Controller
{
    public function index(){
        $categories = categories::get();
        return view('contact', ['categories'=>$categories]);
    }

    public function create(request $request){
                try {               
                    $title=$request->contactTitle;
                    $body=$request->contactBody;
                    $mail = $request->contactEmail;
                    $fullName = $request->contactName;
                    if(!empty($body)){  
                    $contactCreate=contacts::firstOrCreate(
                        [
                            'fullName'=>"$fullName",
                            'email'=>"$mail",
                            'title'=>"$title",
                            'body'=>"$body"
                        ]
                    );
                    $result = "success";
                    }else
                    {
                        $result = "fail";
                    }
                    $categories = categories::get();
                    return view('/contact', ['categories'=>$categories,'result'=>"$result"]);
                }catch (Throwable $e) {
                    return $e;
                }
    }
}
