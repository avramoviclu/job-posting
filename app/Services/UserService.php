<?php

namespace App\Services;

use App\Repositories\UserRepository;
 
class UserService {

    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
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