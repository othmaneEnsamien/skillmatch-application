<?php

namespace App\Http\Livewire\Admin;


use Livewire\Component;
use App\Models\Competence;
use App\Models\CompetenceUser;
use App\Models\Project;
use App\Models\User;

class ProjectAffecterAuxEmploye extends Component
{
    public $searchTerm;
    public $searchTerm1;
    public $searchTerm2;
    public function render()
    {

        $users = User::all();
        $competences = Competence::with('users')->get();
        $comp = Competence::with('projects');
        $projets = Project::all();
        // $projetssearch = Project::where('intitule_projet', 'like', '%' . $this->searchTerm . '%')->orWhere('id', 'like', '%' . $this->searchTerm . '%')->get();
        $competencesearch = User::where('nom', 'like', '%' . $this->searchTerm1 . '%')->get();
        //$niveau = CompetenceUser::where('niveau', 'like', '%' . $this->searchTerm2 . '%')->get();
        return view('livewire.admin.project-affecter-aux-employe', compact('users', 'comp',  'competencesearch', 'competences'))->layout('layouts.default');
    }
}