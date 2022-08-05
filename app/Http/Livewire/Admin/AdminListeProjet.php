<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;
use App\Models\Competence;
use Livewire\WithPagination;

class AdminListeProjet extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $intitule_projet;
    public $search;
    public $projet;
    public $edit_id;
    public $delete_id;
    public $intitule_competence;
    public $intitule_projet_competence;
    public $niveau_requis_projet;

    public $competences_projet = [];
    public $show_id;
    public $show_competences = [];
    public $projetID;
    public $dissocier_id;


    protected $listeners = [
        'refresh-me' => '$refresh'
    ];


    public function store()
    {

        $this->validate([

            'intitule_projet' => 'required|unique:projects',

        ]);
        $newProjet = new Project();
        $newProjet->intitule_projet = $this->intitule_projet;
        $newProjet->save();
        $newProjet->intitule_projet = '';


        session()->flash('message', 'Projet ajouté avec succès');
        $this->emitself('refresh-me');

        $this->dispatchBrowserEvent('close-modal');
    }

    public function storeCompetence($id)
    {

        $projet = Project::where('id', $id)->first();
        $this->save_id = $projet->id;

        $this->intitule_projet = $projet->intitule_projet;
        $this->dispatchBrowserEvent('add-competence-modal');
    }

    public function storeCompetenceData()
    {

        $projet = Project::where('id', $this->save_id)->first();

        $newCompetence = new Competence();
        $newCompetence->intitule_competence = $this->intitule_competence;

        $newCompetence->save();

        $projectID = $projet->id;
        $newCompetence->projects()->attach($projectID, ['niveau_requis_projet' => $this->niveau_requis_projet]);


        session()->flash('message', 'Compétence et niveau ajoutés avec succès pour le projet courant');


        $this->emitself('refresh-me');
        $this->intitule_competence = '';
        $this->niveau_requis_projet = '';
    }


    public function showCompetence($id)
    {
        $projet = Project::where('id', $id)->first();

        $this->projetID = $projet->id;
        $this->show_competences = $projet->competences;

        $this->dispatchBrowserEvent('show-competence-modal');
    }
    public function dissocier($id)
    {

        $this->dissocier_id = $id;
        $this->dispatchBrowserEvent('show-dissocier-modal');
    }

    public function dissocierData()
    {
        $competence = Competence::where('id', $this->dissocier_id)->first();
        $competenceID = $competence->id;
        $competence->projects()->detach($competenceID, ['niveau_requis_projet' => $this->niveau_requis_projet]);
        $competence->delete();

        session()->flash('message', 'Compétence dissociée avec succès');

        $this->emitself('refresh-me');

        $this->dispatchBrowserEvent('close-modal');
    }


    public function closeShowCompetence()
    {

        $this->dispatchBrowserEvent('close');
    }

    public function update($id)
    {
        $projet = Project::where('id', $id)->first();

        $this->edit_id = $projet->id;
        $this->intitule_projet = $projet->intitule_projet;

        $this->dispatchBrowserEvent('show-edit-modal');
    }

    public function updateData()
    {
        $this->validate([

            'intitule_projet' => 'required|unique:projects',

        ]);
        $projet = Project::where('id', $this->edit_id)->first();
        $projet->intitule_projet = $this->intitule_projet;
        $projet->save();
        session()->flash('message', 'Projet modifié avec succès');
        $projet->intitule_projet = '';
        $this->dispatchBrowserEvent('close-modal');
        $this->emitself('refresh-me');
    }

    public function delete($id)
    {
        //$competence=Competence::where('id',$id)->first();
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-modal');
    }

    public function deleteData()
    {
        $projet = Project::where('id', $this->delete_id)->first();
        $projet->delete();
        session()->flash('message', 'Compétence supprimée avec succès');
        $this->emitself('refresh-me');
        $this->dispatchBrowserEvent('close-modal');
    }





    public function cancel()
    {
        $this->delete_id = '';
    }
    public function render()
    {

        $competences = Competence::select('intitule_competence')->distinct()->get();
        $search = '%' . $this->search . '%';
        $projets = Project::where('intitule_projet', 'LIKE', $search)
            ->orWhere('id', 'LIKE', $search)
            ->paginate(6);
        return view('livewire.admin.admin-liste-projet', compact('competences', 'projets'))->layout('layouts.default');
    }
}