<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompanyRepository;
use App\Models\Company; 
class CompanyController extends Controller
{
    public function __construct(CompanyRepository $company)
    {
        $this->company = $company;
    }

    public function register(Request $request)
    {
        $new_company = $this->company->register($request);
        return $new_company;
    }
}
