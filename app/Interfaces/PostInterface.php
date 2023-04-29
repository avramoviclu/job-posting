<?php

namespace App\Interfaces;

interface PostInterface
{
    public function create(array $data);

    public function update(string $id);

    public function delete(string $id);
}