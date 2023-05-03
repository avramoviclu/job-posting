<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Post\CreatePostRequest;
use App\Services\PostService;

class CreatePostController extends Controller
{
    protected PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function __invoke(CreatePostRequest $request)
    {
        return $this->postService->create($request->toArray());
    }
}