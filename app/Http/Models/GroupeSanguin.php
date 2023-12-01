<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;

class GroupeSanguin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class, "groupe_sanguin_id");
    }
}