<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use App\Models\Competence;
use Illuminate\Support\Facades\Auth;

class CompetenceUser extends Component
{

    public function render()
    {
        $allcompetences = Competence::all();
        $users = User::find(Auth::user()->id);

        $competencess = Competence::with('users')->get();

        return view('livewire.user.competence-user', compact('users', 'allcompetences', 'competencess'))->layout('layouts.default');
    }
}