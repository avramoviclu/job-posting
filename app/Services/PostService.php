<?php

namespace App\Services;

use App\Repositories\Eloquent\PostRepository;
 
class PostService {

    protected PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function create()
    {
        //
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        //
    }
}