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
        'id',
        'user_id',
        'competence_id',
        'niveau'
    ];

    public function comp()
    {
        return $this->belongsTo(Competence::class);
    }
    public function Us()
    {
        return $this->belongsTo(User::class);
    }
}