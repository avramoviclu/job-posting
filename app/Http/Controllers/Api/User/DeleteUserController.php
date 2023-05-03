<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\UserService;
 
class DeleteUserController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function __invoke(string $id)
    {
        return $this->userService->delete($id);
    }
}