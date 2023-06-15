<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Company\RemoveUserRequest;
use App\Services\CompanyService;
 
class RemoveUserFromCompanyController extends Controller
{
    protected CompanyService $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function __invoke(RemoveUserRequest $request)
    {
        return $this->companyService->removeUser($request->toArray());
    }
}