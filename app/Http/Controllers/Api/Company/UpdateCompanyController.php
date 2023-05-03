<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Company\UpdateCompanyRequest;
use App\Services\CompanyService;
 
class UpdateCompanyController extends Controller
{
    protected CompanyService $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function __invoke(UpdateCompanyRequest $request)
    {
        return $this->companyService->update($request->id, $request->toArray());
    }
}