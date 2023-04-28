<?php

namespace App\Services;

use App\Repositories\CompanyRepository;
 
class CompanyService {

    protected CompanyRepository $companyRepository;

    public function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($ulid)
    {
        //
    }

    public function edit($ulid)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($ulid)
    {
        //
    }
}