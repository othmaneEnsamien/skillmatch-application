<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ListEmployees extends Component
{
    public function render()
    {
        $projects = DB::table('projects')
            ->join('competence_project', 'competence_project.project_id', '=', 'projects.id')
            ->join('competence_user', 'competence_project.competence_id', '=', 'competence_user.competence_id')
            ->select('projects.intitule_projet', 'competence_user.niveau')
            ->where('competence_user.niveau', '>=', 2)
            ->distinct()
            ->get();





        // $this->employees=User::class::orderBy("nom","asc")->get();
        return view('livewire.admin.list-employees', compact('projects'))->layout('layouts.default');
    }
}