<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Traits\CreateBlog;
use App\Http\Traits\UpdateBlog;

class BlogController extends Controller
{
    use CreateBlog,UpdateBlog;

    public function create()
    {
        return view('create_blog');
    }

    public function store(Request $request)
    {
        $this->createBlog($request->all());
        return 'BLOG CREATED SUCCESSFULLY';
    }

    public function edit(Blog $blog)
    {
        return view('update_blog', ['blog' => $blog]);
    }

    public function update(Request $request, Blog $blog)
    {
        $this->updateBlog($request->all(),$blog);
        return 'BLOG Updated SUCCESSFULLY';
    }
}
