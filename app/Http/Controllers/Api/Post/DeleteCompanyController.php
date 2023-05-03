<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\PostService;

class DeletePostController extends Controller
{
    protected PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function __invoke(string $id)
    {
        return $this->postService->delete($id);
    }
}