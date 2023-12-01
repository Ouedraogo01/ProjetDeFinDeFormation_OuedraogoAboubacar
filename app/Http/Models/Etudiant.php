<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tuteur;
use App\Models\GroupeSanguin;
use App\Models\Nationalite;
use App\Models\Ville;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'classe',
        'photo',
    ];



    public function tuteur()
    {
        return $this->belongsTo(Tuteur::class);
    }

    public function groupe_sanguin()
    {
        return $this->belongsTo(GroupeSanguin::class);
    }

    public function nationalite()
    {
        return $this->belongsTo(Nationalite::class);
    }
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
}