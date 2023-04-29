<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\Eloquent\CompanyRepository;
 
class CompanyService {

    protected CompanyRepository $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function create(array $data)
    {
        return $this->companyRepository->create($data);
    }

    public function update(string $id, array $data)
    {
        return $this->companyRepository->update($id, $data);
    }

    public function delete(string $id)
    {
        return $this->companyRepository->delete($id);
    }
}