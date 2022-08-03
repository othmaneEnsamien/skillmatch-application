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

    public $niveau;



    public function store()
    {
        $userr = Auth::user()->id;
        // // $newCompetence = new Competence();
        // // $newCompetence->intitule_competence = $this->intitule_competence;
        // // $newCompetence->save();
        // // $newCompetence->users()->attach($user, ['niveau' => $this->niveau]);
        // $user = User::find(Auth::user()->id);
        // $user->competences()->syncWithoutDetaching($this->intitule_competence);
        // $competencess = Competence::find($this->intitule_competence);
        // $competencess->save();
        // $competenceid = $competencess->id;
        // $user->competences()->attach($competenceid, ['niveau' => $this->niveau]);



        $user = User::find(Auth::user()->id);
        $user->competences()->syncWithoutDetaching($this->intitule_competence);
        $user->save();
        $competencess = Competence::find($this->intitule_competence);
        $competencess->save();

        $competencess->users()->attach($userr, ['niveau' => $this->niveau]);

        //$competencess->users()->attach($userr, ['niveau' => $this->niveau]);
        // $competencess = Competence::find($this->intitule_competence);
        // $competencess->save();
        // $competencess->users()->attach($userr, ['niveau' => $this->niveau]);
        // $user = User::find(Auth::user()->id);
        // $user->competences()->syncWithoutDetaching($this->intitule_competence);
        // $user->save();
        // $user->competences()->attach($user, ['niveau' => $this->niveau]);
        // $user->save();

        session()->flash('message', 'Compétence ajoutée avec succès');
    }

    public function render()
    {
        $this->competences = Competence::all();
        return view('livewire.user.form-competences')->layout('layouts.default');
    }
}