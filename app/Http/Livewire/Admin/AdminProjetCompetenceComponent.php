<?php

namespace App\Http\Livewire\Admin;

use App\Models\Competence;
use App\Models\CompetenceTask;
use App\Models\Project;
use Livewire\Component;

class AdminProjetCompetenceComponent extends Component
{
    public $niveau_requis_projet;
    public $intitule_competence;
    public $competence_edit_id;


    public function resetInputs()
    {

        $this->intitule_competence = '';
        $this->niveau_requis_projet = '';

        $this->competence_edit_id = '';
    }
    public function close()
    {
        $this->resetInputs();
    }








    public function render()
    {
        $projets = Project::all();
        $competences = Competence::all();
        return view('livewire.admin.admin-projet-competence-component', compact('projets', 'competences'))->layout('layouts.default');
    }
}