<?php

declare(strict_types=1);

namespace App\DTO;

class UserDTO
{
    public string $company_id;
    
    public string $name;
    
    public string $email;
    
    public string $password;

    public function __construct(string $company_id, string $name, string $email, string $password)
    {
        $this->company_id = $company_id;

        $this->name = $name;

        $this->email = $email;

        $this->password = $password;
    }
}