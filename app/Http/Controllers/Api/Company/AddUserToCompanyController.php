<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Company\AddUserRequest;
use App\Services\CompanyService;
 
class AddUserToCompanyController extends Controller
{
    protected CompanyService $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function __invoke(AddUserRequest $request)
    {
        return $this->companyService->addUser($request->toArray());
    }
}