<?php

namespace App\Services;

use App\Repositories\Eloquent\PostRepository;
 
class PostService {

    protected PostRepository $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function create(array $data)
    {
        return $this->postRepository->create($data);
    }

    public function update(string $id, $data)
    {
        return $this->postRepository->update($id, $data);
    }

    public function delete(string $id)
    {
        return $this->postRepository->delete($id);
    }
}