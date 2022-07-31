<?php

use App\Http\Livewire\HomePage;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\ListMyprojects;
use App\Http\Livewire\User\FormCompetences;
use App\Http\Livewire\Admin\FormSearchEmployee;
use App\Http\Livewire\Admin\AdminProjetComponent;
use App\Http\Livewire\Admin\AdminCompetenceComponent;
use App\Http\Livewire\Admin\AdminAddCompetenceComponent;
use App\Http\Livewire\Admin\AdminEditCompetenceComponent;
use App\Http\Livewire\Admin\AdminProjetCompetenceComponent;
use App\Http\Livewire\Admin\AffichageUserCompetence;
use App\Http\Livewire\Admin\ProjectAffecterAuxEmploye;
use App\Http\Livewire\User\CompetenceUser;
use App\Http\Livewire\User\ProjetUser;


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
    Route::get('/admin/competences', AdminCompetenceComponent::class)->name('admin.competences');
    Route::get('/admin/gestion/addcompetence', AdminAddCompetenceComponent::class)->name('admin.addcompetence');
    Route::get('/admin/gestion/editcompetences/{competence_id}', AdminEditCompetenceComponent::class)->name('admin.editcompetences');
    Route::get('projets', AdminProjetComponent::class)->name('admin.projects');
    Route::get('/admin/form-search-employee', FormSearchEmployee::class)->name('admin.form-search-employee');
    Route::get('/admin/usercompetenceniveau', AffichageUserCompetence::class)->name('competenceuser');
    Route::get('/admin/projetcompetence', AdminProjetCompetenceComponent::class)->name('adminprojetcompetence');
    Route::get('/admin/projetaffecteremployee', ProjectAffecterAuxEmploye::class)->name('projetaffecter');
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