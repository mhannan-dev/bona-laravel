<?php

namespace App\Http\Controllers;

use App\Post;
use App\SiteSettings;
use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::latest()->approved()->published()->paginate(9);
        //return $posts;

        return view('welcome', compact('categories','posts'));
    }

    public function details($slug)
    {
        $post = Post::where('slug',$slug)->approved()->published()->first();
        $blogKey = 'blog_' . $post->id;
        if (!Session::has($blogKey)) {
            $post->increment('view_count');
            Session::put($blogKey,1);
        }
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        return view('post',compact('post','randomposts'));
    }



}
