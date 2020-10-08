<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PersonRepository;

class PersonController extends Controller
{
    public function __construct(PersonRepository $person)
    {
        $this->person = $person;
    }

    public function register(Request $request)
    {
        $new_person = $this->person->register($request);
        return $new_person;
    }
}
