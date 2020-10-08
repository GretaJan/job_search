<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Person;
use App\Http\Resources\Person as UserResource;
use App\Http\Resources\PersonProfile as ProfileResource;
use App\Http\Resources\PersonForCompany as UserForCompanyResource;

class PersonRepository
{
    public function register($request)
    {
        $person = new Person();
        $person->email = $request->email;
        $person->password = $request->password;
        $person->save();
        return new UserResource($person);
    }
}