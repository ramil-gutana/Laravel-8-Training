<?php

namespace App\Http\Traits;
use App\Models\Blog;
use App\Http\Traits\ValidatesRequest;

trait UpdateBlog{

    use ValidatesRequest;

    public function updateBlog(array $data,Blog $blog)
    {
        $this->ValidatesRequest($data);
        return $blog->update([
            'title' => $data['title'],
            'content' => $data['content'],
        ]);
    }

}

