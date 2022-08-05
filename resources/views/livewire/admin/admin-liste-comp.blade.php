<div>



    <br>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h5 style="float:left;">Toutes les compétences</h5>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Chercher par ID ou intitulé..."
                                    wire:model="search" />
                            </div>
                            <div class="col-md-8">
                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                    data-target="#addCompetenceModal">Ajouter une nouvelle compétence</button>

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
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($competences as $competence)
                                    <tr>
                                        <th scope="row">{{ $competence->id }}</th>
                                        <td>{{ $competence->intitule_competence }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-secondary"
                                                wire:click="update({{ $competence->id }})">Edit</button>
                                            <button class="btn btn-sm btn-danger"
                                                wire:click="delete( {{ $competence->id }} )">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                                {{ $competences->links('pagination-links') }}

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- Modal AddCompetence -->
    <div wire:ignore.self class="modal fade" id="addCompetenceModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nouvelle compétence</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form wire:submit.prevent="store">

                            <div class="form-group">
                                <label for="intitule_competence">Intitulé :</label>
                                <input type="text" class="form-control" id="intitule_competence"
                                    placeholder="Saisir intitulé compétence" wire:model="intitule_competence">
                                @error('intitule_competence')
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



    <!-- Modal EditCompetence -->
    <div wire:ignore.self class="modal fade" id="editCompetenceModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier compétence</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form wire:submit.prevent="updateData">

                            <div class="form-group">
                                <label for="intitule_competence">Intitulé :</label>
                                <input type="text" class="form-control" id="intitule_competence"
                                    placeholder="Saisir intitulé compétence" wire:model="intitule_competence">
                                @error('intitule_competence')
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


    <!-- Modal DeleteCompetence -->
    <div wire:ignore.self class="modal fade" id="deleteCompetenceModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmer la suppression</h5>
                    <button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <h6>Etes-vous surs de vouloir supprimer cette compétence?</h6>
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
</div>


@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addCompetenceModal').modal('hide');
            $('#editCompetenceModal').modal('hide');
            $('#deleteCompetenceModal').modal('hide');


        });

        window.addEventListener('show-edit-modal', event => {
            $('#editCompetenceModal').modal('show');
        });

        window.addEventListener('show-delete-modal', event => {
            $('#deleteCompetenceModal').modal('show');
        });
    </script>
@endpush
