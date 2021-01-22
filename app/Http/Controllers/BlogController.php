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
        $request->validate([
            'title' => 'required|min:5|regex:/^[A-Za-z0-9. \'",-]+$/',
            'content' => 'required|min:15',
        ]);
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();

        return 'BLOG CREATED SUCCESSFULLY';
    }

    public function edit(Blog $blog)
    {
        return view('update_blog', ['blog' => $blog]);
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|min:5|regex:/^[A-Za-z0-9. \'",-]+$/',
            'content' => 'required|min:15',
        ]);

        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return 'BLOG Updated SUCCESSFULLY';
    }
}
