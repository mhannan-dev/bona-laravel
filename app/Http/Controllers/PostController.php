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
        $posts = Post::latest()->paginate(6);

        return view('all_post', compact('posts'));

    }
    public function details($slug){

        //$post = Post::where('slug',$slug)->approved()->published()->first();
        $post = Post::where('slug',$slug)->first();

        $blogKey = 'blog_' . $post->id;
        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }
        //$randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        $random_posts = Post::all()->random(6);

        return view('post_page', compact('post','random_posts'));
    }
}
