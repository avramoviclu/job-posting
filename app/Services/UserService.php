<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\Eloquent\UserRepository;
 
class UserService {

    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(array $data)
    {
        return $this->userRepository->create($data);
    }

    public function update(string $id, array $data)
    {
        return $this->userRepository->update($id, $data);
    }

    public function delete(string $id)
    {
        return $this->userRepository->delete($id);
    }
}