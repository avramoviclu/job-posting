<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Post\UpdatePostRequest;
use App\Services\PostService;

class UpdatePostController extends Controller
{
    protected PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function __invoke(UpdatePostRequest $request, string $id)
    {
        return $this->postService->update($id, $request->toArray());
    }
}