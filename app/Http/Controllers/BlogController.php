<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $blogs = Post::all();
    
        return view('Blog.index')->with(['blogs' => $blogs]);
    }
}
