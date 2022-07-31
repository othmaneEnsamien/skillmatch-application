<?php

namespace App\Models;

use App\Models\User;
use App\Models\CompetenceUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    //protected $table='competences';

    protected $fillable = [
        'id',
        'intitule_competence'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('niveau')->withTimestamps();
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class)->withPivot('niveau_requis_projet')->withTimestamps();
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class)->withPivot('niveau')->withTimestamps();
    }
}