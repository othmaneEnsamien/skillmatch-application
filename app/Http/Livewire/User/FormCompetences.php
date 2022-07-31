<?php

namespace App\Http\Livewire\User;

use App\Models\Competence;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormCompetences extends Component
{

    public $competences = [];
    public $intitule_competence;
    public $user;
    public $niveau;

    public function mount()
    {
        $user = new User();
    }

    public function store()
    {
        $user = Auth::user();
        $newCompetence = new Competence();
        $newCompetence->intitule_competence = $this->intitule_competence;
        $newCompetence->save();
        $newCompetence->users()->attach($user, ['niveau' => $this->niveau]);

        session()->flash('message', 'Compétence ajoutée avec succès');
    }

    public function render()
    {
        $this->competences = Competence::select('competences.intitule_competence')->distinct()->get();
        return view('livewire.user.form-competences')->layout('layouts.default');
    }
}