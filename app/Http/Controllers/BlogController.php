<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index(){
        return view('blog',[
            "title" => "Blog",
            "blogs" => Blog::all()
        ]);
    }

    public function show($slug){
        return view('detail_blogs', [
            "title" => "Single Post",
            "blogs" => Blog::find($slug)
        ]);
    }
}
