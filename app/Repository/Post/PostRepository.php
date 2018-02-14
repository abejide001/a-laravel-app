<?php

namespace App\Repository\Post;

use App\Post;
class PostRepository implements PostRepositoryInterface{
    public function __construct(Post $post){
        $this->post=$post;
    }
    public function getAll()
    {
        return $this->post->all();
    }
    public function show($id){
        return $this->post->find($id);
    }
}
