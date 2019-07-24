<?php

namespace App\Http\Controllers\Admin;
use App\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$all_tags = Tag::all();
        $all_tags = Tag::orderBy('created_at', 'desc')->get();
        return view('admin.tag.index')->with('all_tags', $all_tags);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required',
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        $tag->save();
        //Session::flash('flash_message', 'Tag successfully added!');
        Toastr::success('Tag Successfully Saved :)' ,'Success');

        return redirect()->route('admin.tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::findOrFail($id);
        //return $products;
        return view('admin.tag.edit')->with('tags', $tags);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|max:255|min:3',
        ]);

        $tag = Tag::find($id);
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);

        $tag->save();
        //return $tag;

        Toastr::success('Post Successfully Updated :)','Success');
        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        Toastr::success('Tag Successfully Deleted :)','Success');
        return redirect()->route('admin.tag.index');
    }
}
