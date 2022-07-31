<div>
    <style>
        nav svg {
            height: 20px
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-4 p-2"
                                style="box-shadow: 1px 2px 1px;text-align:center;background:rgb(190, 190, 190);color:white">
                                Projet Competence
                            </div>



                            {{-- <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search ..." wire:model="searchTerm">
                            </div> --}}

                        </div>


                    </div>
                    <div class="panel-body">
                        {{-- @if (Session::has('message'))
                             <div class="alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif --}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Projet</th>
                                    <th>Competences</th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($projets as $projet)
                                    <tr>
                                        <td>{{ $projet->id }}</td>
                                        <td>{{ $projet->intitule_projet }}</td>


                                        <td>

                                            <ul class="sclist">

                                                @foreach ($projet->competences as $pa)
                                                    @if ($pa->pivot->niveau_requis_projet != null)
                                                        <li><i class="fa "></i>{{ $pa->intitule_competence }} :
                                                            niveau
                                                            ({{ $pa->pivot->niveau_requis_projet }})
                                                            <button style="margin:10px" data-toggle="modal"
                                                                data-target="#editProjetModal"
                                                                class="btn btn-sm btn-primary">Edit</button>

                                                            {{-- (niveau= {{ $pa->pivot->niveau }}) --}}
                                                        </li>
                                                    @endif
                                                @endforeach


                                            </ul>

                                        </td>
                                        <td style="text-align: center;">



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


                    <form wire:submit.prevent="#editProjetData">


                        <div class="form-group row m-2">
                            <label class="col-3">competence</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control"
                                    wire:model="intitule_competence">
                                @error('intitule_competence')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row m-2">
                            <label class="col-3">niveau</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control"
                                    wire:model="niveau_requis_projet">
                                @error('niveau_requis_projet')
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
</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event => {
            $('#editProjetModal').modal('hide');
        });
        window.addEventListener('show-edit-projet-modal', event => {
            $('#editProjetModal').modal('show');
        });
    </script>
@endpush
