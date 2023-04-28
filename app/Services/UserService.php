<?php

namespace App\Services;

use App\Repositories\UserRepository;
 
class UserService {

    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
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