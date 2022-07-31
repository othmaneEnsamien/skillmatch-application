<?php

namespace App\Http\Livewire\Admin;

use App\Models\Competence;
use Livewire\Component;

class AdminAddCompetenceComponent extends Component
{
    public $intitule_competence;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "intitule_competence" => "required"
        ]);
    }

    public function storecompetence()
    {
        $this->validate([
            "intitule_competence" => "required"
        ]);

        $competence = new Competence();
        $competence->intitule_competence = $this->intitule_competence;
        $competence->save();

        session()->flash('message', 'Attribute has been created successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-competence-component')->layout('layouts.default');
    }
}