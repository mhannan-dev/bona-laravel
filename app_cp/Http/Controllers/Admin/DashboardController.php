<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;

class DashboardController extends Controller
{
    public function index(){
        $all_post = Post::latest()->first();
        $all_cat = Category::latest()->first();
        $all_tag = Tag::latest()->first();
    	return view ('admin.dashboard', compact('all_cat','all_post','all_tag'));

    }
}
