<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Competence;
use Livewire\WithPagination;

class AdminListeComp extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $intitule_competence;
    public $search;
    public $competence;
    public $edit_id;
    public $delete_id;


    protected $listeners = [
        'refresh-me' => '$refresh'
    ];


    public function store()
    {

        $this->validate([

            'intitule_competence' => 'required|unique:competences',

        ]);
        $newCompetence = new Competence();
        $newCompetence->intitule_competence = $this->intitule_competence;
        $newCompetence->save();
        $this->emitself('refresh-me');

        session()->flash('message', 'Compétence ajoutée avec succès');

        $this->dispatchBrowserEvent('close-modal');
        $newCompetence->intitule_competence = '';
    }

    public function update($id)
    {
        $competence = Competence::where('id', $id)->first();

        $this->edit_id = $competence->id;
        $this->intitule_competence = $competence->intitule_competence;

        $this->dispatchBrowserEvent('show-edit-modal');
    }

    public function updateData()
    {
        $this->validate([

            'intitule_competence' => 'required|unique:competences',

        ]);

        $competence = Competence::where('id', $this->edit_id)->first();

        $competence->intitule_competence = $this->intitule_competence;
        $competence->save();

        session()->flash('message', 'Compétence modifiée avec succès');

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
        $competence = Competence::where('id', $this->delete_id)->first();
        $competence->delete();

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

        $search = '%' . $this->search . '%';
        $competences = Competence::where('intitule_competence', 'LIKE', $search)
            ->orWhere('id', 'LIKE', $search)
            ->paginate(10);
        return view('livewire.admin.admin-liste-comp', compact('competences'))->layout('layouts.default');
    }
}