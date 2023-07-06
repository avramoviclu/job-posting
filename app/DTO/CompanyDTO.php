<?php

declare(strict_types=1);

namespace App\DTO;

class CompanyDTO
{
    public string $name;
    public string $description;
    public string $timezone;

    public function __construct(string $name, string $description, string $timezone)
    {
       $this->name = $name;

       $this->description = $description;

       $this->timezone = $timezone;
    }
}