<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Resources\Admin as AdminResource;
use App\Models\Admin;

class AdminRepository
{
   public function register($request)
   {
       $admin = new Admin();
       $admin->email = $request->email;
       $admin->password = $request->password;
       $admin->image = $request->image;
       $admin->save();
       return new AdminResource($admin);
   }
   
   public function login($request)
   {
        $email = $request->email;
        $password = $request->password;
        if(Admin::where('email', $email)->count() <= 0 )
        {
            return response()->json(['message' => 'Administratorius su šiuo el. paštu neegzistuoja.'], 400);
        }
        $admin = Admin::where('email', $email)->first();
        return response()->json([
            'message' => 'Sėkmingai prisijungėte',
            'data' => [
                'admin' => $admin,
                'token_type' => 'Bearer',
                'token' => $admin->createToken('Personal Access Token', ['admin'])->accessToken
                ]   
            ], 200);
   }
}