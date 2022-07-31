<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetenceTask extends Model
{
    use HasFactory;
    protected $table = 'competence_project';
    protected $fillable = [
        'project_id',
        'competence_id',
        'niveau_requis_projet'
    ];
}