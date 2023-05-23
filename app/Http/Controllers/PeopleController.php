<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return response()->json($people);
    }  
    public function store(Request $request)
    {
        $person = new People([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'tipo' => $request->input('tipo'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
        ]);
        $person->save();
        return response()->json('Person created!');
    }
    public function show($id)
    {
        $person = People::find($id);
        return response()->json($person);
    }
    public function update(Request $request, $id)
    {
       $person = People::find($id);
       $person->update($request->all());
       return response()->json('Person updated');
    }
    public function destroy($id)
    {
        $person = People::find($id);
        $person->delete();
        return response()->json(' deleted!');
    }
}
