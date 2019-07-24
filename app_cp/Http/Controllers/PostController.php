<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use App\Tag;
use Session;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::latest()->approved()->published()->paginate(6);
        $posts = Post::latest()->paginate(9);
        return view('all_post',compact('posts'));
    }
    public function details($slug)
    {
        //$post = Post::where('slug',$slug)->approved()->published()->first();
        $post = Post::where('slug',$slug)->first();
        //return $post;

        //$blogKey = 'blog_' . $post->id;
        //if (!Session::has($blogKey)) {
        //    $post->increment('view_count');
        ///    Session::put($blogKey,1);
        //}
        //$randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        $random_posts = Post::all()->random(6);

        return view('single_post',compact('post','random_posts'));
    }
    public function postByCategory($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->approved()->published()->get();
        return view('category',compact('category','posts'));
    }
    public function postByTag($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        $posts = $tag->posts()->approved()->published()->get();
        return view('tag',compact('tag','posts'));
    }

}
