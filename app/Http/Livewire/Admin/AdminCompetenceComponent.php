<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Competence;
use Livewire\WithPagination;

class AdminCompetenceComponent extends Component
{
    use WithPagination;


    public function deletecompetences($id)
    {
        $competence = Competence::find($id);
        $competence->delete();
        session()->flash('message', 'deleted category successfuly');
    }

    public function render()
    {
        $competences = Competence::all();
        return view('livewire.admin.admin-competence-component', compact('competences'))->layout('layouts.default');
    }
}