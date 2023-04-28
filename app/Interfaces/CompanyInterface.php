<?php

declare(strict_types=1);

namespace App\Interfaces;

interface CompanyInterface
{
    public function create();

    public function update(string $id);

    public function delete(string $id);
}