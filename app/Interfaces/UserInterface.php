<?php

declare(strict_types=1);

namespace App\Interfaces;

interface UserInterface
{
    public function create(array $data);

    public function update(string $id, array $data);

    public function delete(string $id);
}