<?php

namespace App\Http\Livewire\Admin;

use App\Models\Competence;
use Livewire\Component;

class AdminEditCompetenceComponent extends Component
{
    public $competence_id;
    public $intitule_competence;

    public function mount($competence_id)
    {
        $competence = Competence::find($competence_id);
        $this->intitule_competence = $competence->intitule_competence;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'intitule_competence' => 'required',
        ]);
    }
    public function updatecompetence()
    {
        $this->validate([
            'intitule_competence' => 'required',

        ]);
        $competence = Competence::find($this->competence_id);
        $competence->intitule_competence = $this->intitule_competence;
        $competence->save();
        session()->flash('message', 'competence updated successfuly');
    }

    public function render()
    {
        $competences = Competence::all();
        return view('livewire.admin.admin-edit-competence-component', compact('competences'))->layout('layouts.default');
    }
}