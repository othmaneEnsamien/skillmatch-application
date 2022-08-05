<div>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h5 style="float:left;">Tous les employés</h5>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Chercher par ID ou intitulé..."
                                    wire_model="search" />
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

                                    <th scope="col">Employé</th>
                                    <th scope="col">Projet(s) affecté(s) </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th>
                                            {{ $user->prenom }} {{ $user->nom }}
                                        </th>

                                        <td>
                                            <button class="btn btn-primary"
                                                wire:click="showProject({{ $user->id }})">Afficher</button>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>

                        </table>


                    </div>
                </div>
            </div>

        </div>

    </div>


    <!-- Modal ShowProject -->
    <div wire:ignore.self class="modal fade" id="showProjectModal" tabindex="-1" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Projets affectés</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">ID</th>
                                <th scope="col">Projets </th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($show_projects as $project)
                                @if ($project->niveau_requis_projet <= $project->niveau)
                                    <tr>
                                        <th scope="row">{{ $project->id }}</th>
                                        <td>{{ $project->intitule_projet }}</td>
                                        <td><button
                                                class="btn btn-sm btn-secondary"wire:click="dissocier({{ $project->id }})">Dissocier</button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
    <!-- Modal DissocierCompetenceProjet -->
    <div wire:ignore.self class="modal fade" id="dissocierModal" tabindex="-1" role="dialog"
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
                    <button class="btn btn-sm btn-primary" data-dismiss="modal" aria-label="Close">
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
            $('#showProjectModal').modal('hide');

        });


        window.addEventListener('show-projects-modal', event => {
            $('#showProjectModal').modal('show');
        });

        window.addEventListener('show-dissocier-modal', event => {
            $('#dissocierModal').modal('show');
        });
    </script>
@endpush
