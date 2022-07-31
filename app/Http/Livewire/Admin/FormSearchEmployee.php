<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;
use App\Models\Competence;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FormSearchEmployee extends Component
{

    public $intitule_projet;
    public $intitule_competence;
    public $niveau_requis_projet;
    public $competencess = [];


    public function mount()
    {

        $this->projets = Project::all();
    }

    public function store()
    {

        // dd($this->all());

        $projets = Project::find($this->intitule_projet);
        if (!$projets)
            return abort('404');
        $projets->competences()->syncWithoutDetaching($this->intitule_competence);



        $competences = Competence::find($this->intitule_competence);
        $competences->save();
        $competenceid = $competences->id;
        $projets->competences()->attach($competenceid, ['niveau_requis_projet' => $this->niveau_requis_projet]);


        session()->flash('user_message', ' has been saved successfully');
    }











    public function render()
    {
        $projets = DB::table('projects')->select('intitule_projet')->distinct()->get();
        // $this->competencess = Competence::select('competences.intitule_competence')->distinct()->get();
        $competences = Competence::all();
        $projects = Project::all();
        return view('livewire.admin.form-search-employee', compact('projets', 'competences',  'projects'))->layout('layouts.default');
    }
}