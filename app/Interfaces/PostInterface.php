<?php

namespace App\Interfaces;

interface PostInterface
{
    public function create();

    public function update(string $id);

    public function delete(string $id);
}