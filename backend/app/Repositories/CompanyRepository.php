<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;
use App\Models\Company;
use App\Http\Resources\Company as CompanyResource;
use App\Http\Resources\CompanyProfile as ProfileResource;
use App\Http\Resources\CompanyForPerson as CompanyForPersonResource;

class CompanyRepository
{
    public function register($request)
    {
        $company = new Company();
        $company->company_name = $request->company_name;
        $company->company_code = $request->company_code;
        $company->email = $request->email;
        $company->password = bcrypt($request->password);
        $company->save();
        return new CompanyResource($company);
    }
}