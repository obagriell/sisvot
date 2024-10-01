<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\VoteController;

Route::apiResource('voters', VoterController::class);
Route::apiResource('votes', VoteController::class);
