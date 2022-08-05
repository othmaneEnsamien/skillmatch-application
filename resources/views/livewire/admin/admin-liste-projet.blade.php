<div>


    <br>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h5 style="float:left;">Tous les projets</h5>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Chercher par ID ou intitulé..."
                                    wire:model="search" />
                            </div>
                            <div class="col-md-8">
                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#addProjetModal">Ajouter un nouveau projet</button>

                            </div>
                        </div>

                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success text-center">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>



                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Intitulé</th>
                                    <th scope="col">Compétences</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projets as $projet)
                                    <tr>
                                        <th scope="row">{{ $projet->id }}</th>
                                        <td>{{ $projet->intitule_projet }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary"
                                                wire:click="showCompetence({{ $projet->id }})">Afficher</button>
                                            <button class="btn btn-sm btn-secondary"
                                                wire:click="storeCompetence({{ $projet->id }})">Ajouter</button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-secondary"
                                                wire:click="update({{ $projet->id }})">Edit</button>
                                            <button class="btn btn-sm btn-danger"
                                                wire:click="delete( {{ $projet->id }} )">Delete</button>
                                        </td>

                                    </tr>
                                @endforeach
                                {{ $projets->links('pagination-links') }}

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Modal Addprojet -->
    <div wire:ignore.self class="modal fade" id="addProjetModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouveau projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form wire:submit.prevent="store">

                            <div class="form-group">
                                <label for="intitule_projet">Intitulé :</label>
                                <input type="text" class="form-control" id="intitule_projet"
                                    placeholder="Saisir intitulé projet" wire:model="intitule_projet">
                                @error('intitule_projet')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Modal EditProjet -->
    <div wire:ignore.self class="modal fade" id="editProjetModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form wire:submit.prevent="updateData">

                            <div class="form-group">
                                <label for="intitule_projet">Intitulé :</label>
                                <input type="text" class="form-control" id="intitule_projet"
                                    placeholder="Saisir intitulé projet" wire:model="intitule_projet">
                                @error('intitule_projet')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal DeleteProjet -->
    <div wire:ignore.self class="modal fade" id="deleteProjetModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Supprimer</h5>
                    <button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h6>Etes-vous surs de vouloir supprimer ce projet?</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" wire:click="cancel()" data-dismiss="modal"
                        aria-label="Close">
                        Annuler
                    </button>
                    <button class="btn btn-sm btn-danger" wire:click="deleteData()">
                        Oui
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div>

        <!-- Modal AddCompetence -->
        <div wire:ignore.self class="modal fade" id="addCompetenceModal" tabindex="-1" role="dialog"
            aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter compétence</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">

                            <div class="form-group">
                                <label for="intitule_projet">Projet courant :</label>
                                <input type="text" class="form-control" wire:model="intitule_projet">
                            </div>

                            <div class="form-group">
                                <label for="intitule_competence">Intitulé Compétence :</label>
                                <select class="form-select" id="inputGroupSelect02" wire:model="intitule_competence">

                                    <option value="0"> </option>
                                    @foreach ($competences as $competence)
                                        <option value="{{ $competence->intitule_competence }}">
                                            {{ $competence->intitule_competence }}</option>
                                    @endforeach
                                </select>
                                @error('intitule_competence')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="intitule_compétence">Niveau :</label>
                                <select class="form-select" id="inputGroupSelect02"
                                    wire:model="niveau_requis_projet">
                                    <option value=""> </option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                                <br>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Quels sont les niveaux d'évaluation ?
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">0 - Pas de connaissance</a>
                                        <a class="dropdown-item" href="#">1 - Connaissance théorique</a>
                                        <a class="dropdown-item" href="#">2 - Première expérience</a>
                                        <a class="dropdown-item" href="#">3 - Bonne expérience</a>
                                        <a class="dropdown-item" href="#">4 - Niveau expert</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary"
                                    wire:click="storeCompetenceData()">OK</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            </div>


                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Modal ShowCompetence -->
    <div wire:ignore.self class="modal fade" id="showCompetenceModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Compétences requises par le projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">Compétences</th>

                                <th scope="col">Action</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($show_competences as $competence)
                                <tr>
                                    <th> {{ $competence->intitule_competence }}</th>

                                    <td></td>


                                    <td>
                                        <button class="btn btn-sm btn-secondary"
                                            wire:click="dissocier({{ $competence->id }})">Dissocier</button>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                        {{ $projets->links('pagination-links') }}
                    </table>


                </div>

            </div>
        </div>
    </div>

    <!-- Modal DissocierCompetenceProjet -->
    <div wire:ignore.self class="modal fade" id="dissocierCompetenceModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Dissocier la compétence</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h6>Etes-vous sûrs de vouloir dissocier cette compétence de ce projet?</h6>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" wire:click="cancel()" data-dismiss="modal"
                        aria-label="Close">
                        Annuler
                    </button>
                    <button class="btn btn-sm btn-danger" wire:click="dissocierData() ">
                        Oui
                    </button>
                </div>

            </div>
        </div>
    </div>



</div>


@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addProjetModal').modal('hide');
            $('#editProjetModal').modal('hide');
            $('#deleteProjetModal').modal('hide');
            $('#addCompetenceModal').modal('hide');
            $('#showCompetenceModal').modal('hide');
            $('#dissocierCompetenceModal').modal('hide');

        });

        window.addEventListener('show-edit-modal', event => {
            $('#editProjetModal').modal('show');
        });

        window.addEventListener('show-delete-modal', event => {
            $('#deleteProjetModal').modal('show');


        });

        window.addEventListener('add-competence-modal', event => {
            $('#addCompetenceModal').modal('show');
        });

        window.addEventListener('show-competence-modal', event => {
            $('#showCompetenceModal').modal('show');
        });

        window.addEventListener('show-dissocier-modal', event => {
            $('#dissocierCompetenceModal').modal('show');
        });
    </script>
@endpush
