<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinions extends Model
{
    protected $table = 'opinion';

    use HasFactory;

    // Liaison de l'utilisateur avec le commentaire
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
