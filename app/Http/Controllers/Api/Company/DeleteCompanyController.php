<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\CompanyService;
 
class DeleteCompanyController extends Controller
{
    protected CompanyService $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function __invoke(string $id)
    {
        return $this->companyService->delete($id);
    }
}