<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function GetAllPosts(){
        $blogs = Blog::paginate(3);
        return view("inicio",[
            "blogs" => $blogs
        ]);
    }

    
}
