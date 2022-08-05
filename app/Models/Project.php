<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'intitule_projet',
        'niveau_requis_projet'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function competences()
    {
        return $this->belongsToMany(Competence::class)->withPivot('niveau_requis_projet')->withTimestamps();
    }
}