<?php

namespace App\Http\Controllers;


use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FavouriteController extends Controller
{

    /**
     * @param $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add($post)
    {
        $user = Auth::user();
        $isFavourite = $user->favorite_posts()->where('post_id',$post)->count();

        //return $post;
        if ($isFavourite == 0)
        {
            $user->favorite_posts()->attach($post);
            Toastr::success('Post successfully added to your favorite list :)','Success');
            return redirect()->back();
        } else{
            $user->favorite_posts()->detach($post);
            Toastr::success('Post successfully removed form your favorite list :)','Success');
            return redirect()->back();
        }
    }

}