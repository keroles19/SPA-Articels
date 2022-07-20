<?php

namespace App\Http\Controllers\APi\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts  = Post::with('user:id,name')->latest()->take(10)->get();
        return apiResponse($posts,200,'success');
    }


    public function show($slug){
        $post = Post::with('comments')->where('slug',$slug)->get();
        return apiResponse($post,200,'success');
    }

}
