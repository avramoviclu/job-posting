<?php

namespace App\Interfaces;

interface UserInterface
{
    public function create();

    public function update(string $id);

    public function delete(string $id);
}