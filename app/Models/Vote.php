<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = ['voter_id', 'candidate', 'voted_at'];

    public function voter()
    {
        return $this->belongsTo(Voter::class);
    }
}

