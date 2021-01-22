<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('create_blog');
    }
    public function store(Request $request)
    {
        $blog=new Blog();
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->save();
        return 'BLOG CREATED SUCCESSFULLY';
    }
    public function edit(int $id)
    {
        return view('update_blog',['blog'=>Blog::find($id)]);
    }
    public function update(Request $request,int $id)
    {
        $blog=Blog::find($id);
        $blog->title=$request->title;
        $blog->content=$request->content;
        $blog->save();
        return 'BLOG Updated SUCCESSFULLY';
    }
}
