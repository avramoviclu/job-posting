<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Company\CreateCompanyRequest;
use App\Services\CompanyService;
 
class CreateCompanyController extends Controller
{
    protected CompanyService $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function __invoke(CreateCompanyRequest $request)
    {
        return $this->companyService->create($request->toArray());
    }
}