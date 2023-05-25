<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class RegisterController extends Controller
{
    
    public function store(Request $request)
    {
       $input = $request->all();

       User::create([
            'name' => $input['name'],
            'cpf' => $input['cpf'],
            'email' => $input['email'],
            'type' => $input['type'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);

        return response()->json(['status' => true,'message' => "Registation Success"   ]);
    }

}