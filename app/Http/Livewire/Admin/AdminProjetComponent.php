<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;

class AdminProjetComponent extends Component
{
    public  $intitule_projet,  $projet_edit_id, $projet_delete_id;


    public $searchTerm;



    public function updated($fields)
    {
        $this->validateOnly($fields, [

            'intitule_projet' => 'required',


        ]);
    }



    public function storeProjetData()
    {

        $this->validate([
            'intitule_projet' => 'required',

        ]);



        $projett = new Project();
        $projett->intitule_projet = $this->intitule_projet;

        $projett->save();


        session()->flash('message', 'New project has been added successfully');
        $this->intitule_projet = '';




        $this->dispatchBrowserEvent('close-modal');
    }


    public function resetInputs()
    {

        $this->intitule_projet = '';

        $this->projet_edit_id = '';
    }


    public function close()
    {
        $this->resetInputs();
    }


    public function editProjets($id)
    {
        $projetss = Project::where('id', $id)->first();


        $this->projet_edit_id = $projetss->id;
        $this->intitule_projet = $projetss->intitule_projet;




        $this->dispatchBrowserEvent('show-edit-projet-modal');
    }

    public function editProjetData()
    {
        //on form submit validation
        $this->validate([

            'intitule_projet' => 'required',

        ]);

        $projets = Project::where('id', $this->projet_edit_id)->first();
        $projets->intitule_projet = $this->intitule_projet;
        $projets->save();

        session()->flash('message', 'Projet has been updated successfully');



        $this->dispatchBrowserEvent('close-modal');
    }



    public function deleteConfirmation($id)
    {
        $this->projet_delete_id = $id;


        $this->dispatchBrowserEvent('show-delete-confirmation-modal');
    }


    public function deleteProjetData()
    {
        $projets = Project::where('id', $this->projet_delete_id)->first();
        $projets->delete();


        session()->flash('message', 'Projet has been deleted successfully');


        $this->dispatchBrowserEvent('close-modal');


        $this->projet_delete_id = '';
    }


    public function cancel()
    {
        $this->projet_delete_id = '';
    }


    public function render()
    {
        $projets = Project::where('intitule_projet', 'like', '%' . $this->searchTerm . '%')->orWhere('id', 'like', '%' . $this->searchTerm . '%')->get();

        return view('livewire.admin.admin-projet-component', compact('projets'))->layout('layouts.default');
    }
}