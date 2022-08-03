<div>
    <div class="row">


        <div class="col-4">
            <img src="../../../assets/espace-employee.svg" class="img-fluid" alt="Responsive image" width="100%"
                height="100%">
        </div>
        <div class="col-8" style="margin-top: 10%;">
            <h2 style="color:#13404D ;font-family:Roboto Slab"></h2>
            @if (session()->has('user_message'))
                <div class="alert alert-success text-center">{{ session('user_message') }}</div>
            @endif
            <form wire:submit.prevent="store">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="projet">Nom du projet :</label>
                        <select class="form-control" id="formGroupExampleInput" placeholder="Projet"
                            wire:model='intitule_projet'>
                            <option value="0">choisir projet ...</option>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->intitule_projet }}
                                </option>
                            @endforeach
                        </select>

                        {{-- wire:model="intitule_projet"  > --}}
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="competence">Compétence requise :</label>
                    <select class="form-control" id="formGroupExampleInput2" placeholder="Compétence"
                        wire:model="intitule_competence">
                        <option value="0">choisir compétence ...</option>
                        @foreach ($competences as $competence)
                            <option value="{{ $competence->id }}">
                                {{ $competence->intitule_competence }}
                            </option>
                        @endforeach
                    </select>
                    {{-- wire:model="intitule_competence"> --}}
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">

                        <div class="form-group">
                            <label for="formGroupExampleInput3">Niveau :</label>
                            <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Niveau"
                                wire:model="niveau_requis_projet">
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>



        </div>
    </div>
    <!-- Modal -->
    {{-- <div wire:ignore class="modal fade" id="addProject" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un nouveau projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="store">

                        <div class="form-group">
                            <label for="formGroupExampleInput">Nouveau projet :</label>
                            <select class="form-control" id="formGroupExampleInput" placeholder="Projet"
                                wire:model="intitule_projet">
                                @foreach ($projects as $project)
                                    <option value="{{ $project->id }}">{{ $project->intitule_projet }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Nouvelle compétence :</label>
                            <select class="form-control" id="formGroupExampleInput2" placeholder="Compétence"
                                wire:model="intitule_competence" multiple>
                                @foreach ($competences as $allcompetence)
                                    <option value="{{ $allcompetence->id }}">{{ $allcompetence->intitule_competence }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput3">Niveau :</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Niveau"
                                wire:model="niveau_requis_projet">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="float: right;">OK</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</div>


@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addProject').modal('hide');
        });
    </script>
@endpush --}}



    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</div>
