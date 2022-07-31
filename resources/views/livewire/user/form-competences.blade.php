<div class="row">


    <div class="col-4">
        <img src="../../../assets/espace-employee.svg" class="img-fluid" alt="Responsive image" width="100%"
            height="100%">
    </div>
    <div class="col-8" style="margin-top: 10%;">
        <h2 style="color:#13404D ;font-family:Roboto Slab">Formulaire compétences</h2>
        <div class="row">
            @if (session()->has('message'))
                <div class="alert alert-success text-center">{{ session('message') }}</div>
            @endif
        </div>
        <form wire:submit.prevent="store">
            <div class="form-group col-md-4">

                <label for="exampleInputSkill">Compétence :</label>
                <br>
                <select class="form-select" id="inputGroupSelect02" wire:model="intitule_competence">
                    <option value="0"> </option>
                    @foreach ($competences as $competence)
                        <option value="{{ $competence->intitule_competence }}">{{ $competence->intitule_competence }}
                        </option>
                    @endforeach
                </select>
                <a href="#" id="emailHelp" class="form-text text-muted">Ajouter une nouvelle compétence</a>
            </div>
            <div class="form-group col-md-4">
                <label for="exampleInputLevel">Niveau :</label>
                <br>
                <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect02" wire:model="niveau">
                        <option>...</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>


                    </select>
                    <label class="input-group-text" for="inputGroupSelect02">Options</label>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Quels sont les niveaux d'auto-évaluation ?
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">0 - Pas de connaissance</a>
                    <a class="dropdown-item" href="#">1 - Connaissance théorique</a>
                    <a class="dropdown-item" href="#">2 - Première expérience</a>
                    <a class="dropdown-item" href="#">3 - Bonne expérience</a>
                    <a class="dropdown-item" href="#">4 - Niveau expert</a>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>

    </div>
</div>

<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
