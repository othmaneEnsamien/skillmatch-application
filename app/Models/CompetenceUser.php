<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class CompetenceUser extends Pivot
{
    use HasFactory;

    protected $table = 'competence_user';
    protected $fillable = [
        'niveau'
    ];
}