<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }  
    public function store(Request $request)
    {
        $newUser = new User([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'type' => $request->input('type'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        $newUser->save();

        $user = User::where('email', $request->input('email'))->first();
        
        return response()->json($user);
    }
    public function show($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }
    public function update(Request $request, $id)
    {
       $user = User::find($id);
       
        //    $user->update($request->all());
        $user->update([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'type' => $request->input('type'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        return response()->json('Pessoa atualizada');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('Pessoa deletada');
    }
}
