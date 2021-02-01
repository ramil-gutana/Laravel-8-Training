<?php

namespace App\Http\Traits;
use App\Models\Blog;
use App\Http\Traits\ValidatesRequest;

trait CreateBlog{

    use ValidatesRequest;

    public function createBlog(array $data)
    {
        $this->ValidatesRequest($data);
        return Blog::create([
            'title'=>$data['title'],
            'content'=>$data['content']
        ]);
    }

}

