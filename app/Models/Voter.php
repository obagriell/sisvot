<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $fillable = ['name', 'email', 'cpf'];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}

