<?php

namespace App\Http\Controllers;

use App\Models\Vote;   
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return Vote::with('voter')->get(); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'voter_id' => 'required|exists:voters,id',
            'candidate' => 'required',
        ]);

        return Vote::create($request->all());
    }

    public function show($id)
    {
        return Vote::with('voter')->find($id);
    }

    public function update(Request $request, $id)
    {
        $vote = Vote::find($id);
        $vote->update($request->all());
        return $vote;
    }

    public function destroy($id)
    {
        Vote::destroy($id);
    }
}

