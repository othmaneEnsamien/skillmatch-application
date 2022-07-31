<div>
    <div class="container mt-5">
        <div class="row m-5">
            <div class="col-md-12 text-center m-5">
                <h3><strong>Projets</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left;"><strong>All Projects</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal"
                            data-target="#addProjetModal">Add New Project</button>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif


                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="search" class="form-control w-25" placeholder="search"
                                    wire:model="searchTerm" style="float: right;" />
                            </div>
                        </div>


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Projet</th>


                                    <th style="text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($projets->count() > 0)
                                    @foreach ($projets as $proj)
                                        <tr>
                                            <td>{{ $proj->id }}</td>
                                            <td>{{ $proj->intitule_projet }}</td>


                                            <td style="text-align: center;">

                                                <button data-toggle="modal" data-target="#editProjetModal"
                                                    class="btn btn-sm btn-primary"
                                                    wire:click="editProjets({{ $proj->id }})">Edit</button>
                                                <button data-toggle="modal" data-target="#deleteProjetModal"
                                                    class="btn btn-sm btn-danger"
                                                    wire:click="deleteConfirmation({{ $proj->id }})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center;"><small>No Projet Found</small>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addProjetModal" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form wire:submit.prevent="storeProjetData">


                        <div class="form-group row m-2">
                            <label class="col-3">Projet</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control" wire:model="intitule_projet">
                                @error('intitule_projet')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row m-2">
                            <label class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Add Projet</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="editProjetModal" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Projet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form wire:submit.prevent="editProjetData">


                        <div class="form-group row m-2">
                            <label class="col-3">projet</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control" wire:model="intitule_projet">
                                @error('intitule_projet')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row m-2">
                            <label s="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Edit Projet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div wire:ignore.self class="modal fade" id="deleteProjetModal" tabindex="-1" data-backdrop="static"
        data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure? You want to delete this Projet data!</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" wire:click="cancel()" data-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <button class="btn btn-sm btn-danger" wire:click="deleteProjetData()">Yes! Delete</button>
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
        });


        window.addEventListener('show-edit-projet-modal', event => {
            $('#editProjetModal').modal('show');
        });


        window.addEventListener('show-delete-confirmation-modal', event => {
            $('#deleteProjetModal').modal('show');
        });
    </script>
@endpush
