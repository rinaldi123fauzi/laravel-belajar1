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

    //cara pertama
    // public function show($slug){
    //     return view('detail_blogs', [
    //         "title" => "Single Post",
    //         "blogs" => Blog::find($slug)
    //     ]);
    // }

    //cara kedua
    public function show(Blog $blog){
        return view('detail_blogs', [
            "title" => "Single Post",
            "blogs" => $blog
        ]);
    }
}
