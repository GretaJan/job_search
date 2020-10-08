<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Repositories\AdminRepository;

class AdminController extends Controller
{
    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }

    public function register(Request $request)
    {
        $new_admin = $this->admin->register($request);
        return $new_admin;
    }

    public function login(Request $request)
    {
        // $email = $request->email;
        // $password = $request->password;
        // if(Admin::where('email', $email)->count() <= 0 )
        // {
        //     return response()->json(['message' => 'Administratorius su šiuo el. paštu neegzistuoja.'], 400);
        // }
        // $admin = Admin::where('email', $email)->first();
        //     return response()->json([
        //             'message' => 'Sėkmingai prisijungėte',
        //             'data' => [
        //                 'admin' => $admin,
        //                 'token_type' => 'Bearer',
        //                 'token' => $admin->createToken('Personal Access Token', ['admin'])->accessToken
        //                 ]   
        $login = $this->admin->login($request);
        return $login;
    }
}
