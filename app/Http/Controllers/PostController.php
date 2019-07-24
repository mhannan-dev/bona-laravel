<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){
        $post_instance = Post::latest()->get();

        return view('all_post', compact('post_instance'));

    }
    public function details($slug){
        $post = Post::where('slug',$slug)->first();

        return view('post_page', compact('post'));
    }
}
