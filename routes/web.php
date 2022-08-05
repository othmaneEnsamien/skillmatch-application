<?php

use App\Http\Livewire\HomePage;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\ProjetUser;

use App\Http\Livewire\Admin\ListEmployees;
use App\Http\Livewire\User\CompetenceUser;
use App\Http\Livewire\User\ListMyprojects;
use App\Http\Livewire\User\FormCompetences;


use App\Http\Livewire\Admin\FormSearchEmployee;
use App\Http\Livewire\Admin\AdminProjetComponent;
use App\Http\Livewire\Admin\AffichageUserCompetence;
use App\Http\Livewire\Admin\AdminCompetenceComponent;
use App\Http\Livewire\Admin\ProjectAffecterAuxEmploye;
use App\Http\Livewire\Admin\AdminAddCompetenceComponent;
use App\Http\Livewire\Admin\AdminEditCompetenceComponent;
use App\Http\Livewire\Admin\AdminListeComp;
use App\Http\Livewire\Admin\AdminListeProjet;
use App\Http\Livewire\Admin\AdminProjetCompetenceComponent;
use App\Http\Livewire\Admin\ListEmp;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//route employee
Route::get('/', HomePage::class)->name('homepage');
Route::get('/user/form-competences', FormCompetences::class)->name('user.form-competences');
Route::get('/user/list-myprojects', ListMyprojects::class)->name('user.list-myprojects');
Route::get('user/list-usercompetence', CompetenceUser::class)->name('competence.user');
Route::get('user/list-userprojet', ProjetUser::class)->name('projet.user');


//route admin


Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/usercompetenceniveau', AffichageUserCompetence::class)->name('competenceuser');
    Route::get('/admin/projetaffecteremployee', ProjectAffecterAuxEmploye::class)->name('projetaffecter');
    Route::get('/admin/listprojetemploye', ListEmployees::class)->name('listprojet');
    Route::get('/admin/competences', AdminListeComp::class)->name('admin.list-competences');
    Route::get('/admin/projets', AdminListeProjet::class)->name('admin.list-projets');
    Route::get('/admin/projetemp', ListEmp::class)->name('admin.projetemp');
});


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });