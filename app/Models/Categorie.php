<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tache;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'couleur',
    ];

    public function taches() {
        return $this->hasMany(Tache::class);
    }
}
