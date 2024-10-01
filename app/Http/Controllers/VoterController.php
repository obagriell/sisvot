<?php

namespace App\Http\Controllers;

use App\Models\Voter; 
use Illuminate\Http\Request;



class VoterController extends Controller
{
    public function index()
    {
        return Voter::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:voters',
            'cpf' => 'required|unique:voters',
        ]);

        return Voter::create($request->all());
    }

    public function show($id)
    {
        return Voter::find($id);
    }

    public function update(Request $request, $id)
    {
        $voter = Voter::find($id);
        $voter->update($request->all());
        return $voter;
    }

    public function destroy($id)
    {
        Voter::destroy($id);
    }
}
