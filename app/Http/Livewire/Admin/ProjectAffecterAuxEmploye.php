<?php

namespace App\Http\Livewire\Admin;


use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use App\Models\Competence;
use Livewire\WithPagination;
use App\Models\CompetenceTask;
use App\Models\CompetenceUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class ProjectAffecterAuxEmploye extends Component
{
    public $searchTermP;
    public $searchTermN;
    public $searchTermC;
    use WithPagination;
    public function render()
    {

        // $usersss = User::with('competences')->where('intitule_competence', 'LIKE', '%' . $this->searchTermC . '%')->get();
        // $users = User::whereHas('competences', function (Builder $query) {
        //     $query->where('competences.intitule_competence', 'like', '%' . $this->searchTermC . '%');
        // })->get();
        $s = '%' . $this->searchTermC . '%';
        $users = User::with('competences')->orderBy('date_integration', 'ASC')->paginate(6);
        // dd($users->toArray());
        // $usersss = User::with('competences')->select('nom', 'prenom', 'intitule_competence')->whereHas('competences', function ($query) use ($s) {
        //     $query->where('intitule_competence', 'like', $s);
        // })->get();

        // $userss = Competence::whereHas('competences', function (Builder $query) {
        //     $query->where('title', 'like', '%' . $this->searchTerm . '%');
        // })->get();
        // $compuser = User::has('competences.projects')->get();
        // $projectss = Project::whereHas('competence_project', function ($query) {
        //     return $query->where('niveau_requis_projet', '>=', 3);
        // })->whereHas('competence_user', function ($query) {
        //     return $query->where('niveau', '>=', 3);
        // })->get();
        $competences = Competence::distinct('projects')->get();
        $competenceuser = CompetenceUser::all();

        // $comp = CompetenceTask::join('competence_user', 'competence_project.competence_id', '=', 'competence_user.competence_id')
        //     ->where('competence_user.niveau', '>=', 'competence_project.niveau_requis_projet')->get();
        // dd($comp);
        $projets = Project::all();
        // $projects = DB::table('projects')
        //     ->join('competence_project', 'competence_project.project_id', '=', 'projects.id')
        //     ->join('competence_user', 'competence_project.competence_id', '=', 'competence_user.competence_id')
        //     ->select('projects.intitule_projet', 'competence_user.niveau')
        //     ->where('competence_user.niveau', '>=', 2)
        //     ->distinct()
        //     ->get();
        $user = User::find(Auth::user()->id)->get();
        $projectss = Project::with('competences')->distinct()->get();
        $projectss1 = Project::with('competences')->where('intitule_projet', 'LIKE', '%' . $this->searchTermP . '%')->get();
        $projects = DB::table('projects')
            ->join('competence_project', 'competence_project.project_id', '=', 'projects.id')
            ->join('competence_user', 'competence_project.competence_id', '=', 'competence_user.competence_id')
            ->join('users', 'competence_user.user_id', '=', 'users.id')
            ->select('projects.intitule_projet', 'competence_user.niveau', 'competence_project.niveau_requis_projet')
            ->where('competence_user.niveau', '>=', 3)
            ->distinct()
            ->get();

        $ct = CompetenceTask::all();





        // $projects = Project::join('competence_project', 'projects.id', '=', 'competence_project.project_id')
        //     ->join('competence_user', 'competence_project.competence_id', '=', 'competence_user.competence_id')
        //     ->where('competence_user.niveau', '>=', 'competence_project.niveau_requis_projet')
        //     ->get();
        // dd($projects);


        // $projetssearch = Project::where('intitule_projet', 'like', '%' . $this->searchTerm . '%')->orWhere('id', 'like', '%' . $this->searchTerm . '%')->get();
        // $competencesearch = User::where('nom', 'like', '%' . $this->searchTerm1 . '%')->get();
        //$niveau = CompetenceUser::where('niveau', 'like', '%' . $this->searchTerm2 . '%')->get();
        return view('livewire.admin.project-affecter-aux-employe', compact('users',  'ct', 'projectss', 'projectss1', 'projets',  'competences'))->layout('layouts.default');
    }
}