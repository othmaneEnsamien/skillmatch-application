<?php

namespace App\Http\Livewire\Admin;

use App\Models\Competence;
use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ListEmp extends Component
{
    public $search;
    public $user;
    public $user_id;
    public $show_projects = [];



    protected $listeners = [
        'refresh-me' => '$refresh'
    ];


    public function showProject($id)
    {
        $user = User::where('id', $id)->first();
        $projects = DB::table('projects')
            ->join('competence_project', 'competence_project.project_id', '=', 'projects.id')
            ->join('competence_user', 'competence_project.competence_id', '=', 'competence_user.competence_id')
            ->select(
                'projects.intitule_projet',
                'competence_user.user_id',
                'projects.id',
                'competence_user.niveau',
                'competence_project.niveau_requis_projet'
            )
            ->where('competence_user.user_id', '=', $user->id)
            ->get();
        $this->show_projects = $projects;


        $this->dispatchBrowserEvent('show-projects-modal');
    }

    public function closeShowProject()
    {

        $this->dispatchBrowserEvent('close');
    }
    public function dissocier($id)
    {

        $this->dissocier_id = $id;
        $this->dispatchBrowserEvent('show-dissocier-modal');
    }

    public function dissocierData()
    {
        $project = Project::where('id', $this->dissocier_id)->first();
        $projectID = $project->id;
        $project->users()->detach($projectID);
        $project->delete();

        session()->flash('message', 'Projet dissociée avec succès');

        $this->emitself('refresh-me');

        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {

        $users = User::with('competences')->orderBy('date_integration', 'ASC')->paginate(6);
        $competences = Competence::with('projects')->get();

        // $comp = CompetenceTask::join('competence_user', 'competence_project.competence_id', '=', 'competence_user.competence_id')
        //     ->where('competence_user.niveau', '>=', 'competence_project.niveau_requis_projet')->get();
        // dd($comp);
        $projets = Project::all();
        $projectss = Project::with('competences')->get();
        // $users = User::all();


        // $competences_user = CompetenceUser::all();
        return view('livewire.admin.list-emp', compact('users', 'projets', 'projectss'))->layout('layouts.default');
    }
}