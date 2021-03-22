<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class ApiController extends Controller
{
    /*
        This function return that all post rows
    */
    public function index(Request $request){
        $posts =  Post::all();

        return response($posts, 200);
    }

    /*
        return post with post_id
    */ 

    public function get_post(Request $request){
        $posts = Post::find($request->post_id);

        if($posts == null){
            return response(['message' => 'There is no post'], 404);
        }

        return response($posts, 200);
    }

}
