<?php

namespace App\Services;

use App\Repositories\PostRepository;
 
class PostService {

    protected PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($ulid)
    {
        //
    }

    public function edit($ulid)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($ulid)
    {
        //
    }
}