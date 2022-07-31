<?php

namespace App\Http\Livewire\Admin;

use App\Models\Competence;
use App\Models\Project;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AffichageUserCompetence extends Component
{
    public function updateUserStatus($user_id, $etat)
    {
        $user = User::find($user_id);
        $user->etat = $etat;
        $user->save();
        session()->flash('user_message', 'User etat has been updated successfully');
    }
    public function deleteusers($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('message', 'deleted user successfuly');
    }

    public function render()
    {
        $users = User::all();
        $competences = Competence::with('users')->get();
        $comp = Competence::with('projects');

        $projets = Project::all();

        return view('livewire.admin.affichage-user-competence', compact('users', 'comp', 'competences', 'projets'))->layout('layouts.default');
    }
}