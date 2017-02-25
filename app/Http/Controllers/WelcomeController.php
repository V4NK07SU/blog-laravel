<?php

namespace App\Http\Controllers;

use App\Post;

class WelcomeController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('welcome')
            ->with('posts', $posts);

    }

   
    public function article($slug){
    	$post = Post::findBySlug($slug);
    	return view('article')->with('post', $post);
    }

   
}
