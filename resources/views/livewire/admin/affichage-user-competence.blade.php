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
                            <h2 style="color:#13404D ;font-family:Roboto Slab">INFOS USERS
                            </h2>



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
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>email</th>
                                    <th>specialite</th>
                                    <th>date d integration</th>
                                    <th>Etat</th>
                                    <th>Action</th>

                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($users as $user)
                                    @if ($user->type == 'USR')
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->nom }}</td>
                                            <td>{{ $user->prenom }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->specialite }}</td>
                                            <td>{{ $user->date_integration }}</td>




                                            <td>{{ $user->etat }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-success btn-sm dropdown-toggle"
                                                        type="button" data-toggle="dropdown">Status
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#"
                                                                wire:click.prevent="updateUserStatus({{ $user->id }}, 'valider')">Valider</a>
                                                        </li>
                                                        <li><a href="#"
                                                                wire:click.prevent="updateUserStatus({{ $user->id }}, 'annuler')">Annuler</a>
                                                        </li>
                                                    </ul>
                                                    <button class="btn btn-success btn-sm " type="button"> <a
                                                            href="#" style="padding:10px"
                                                            onclick="confirm('Are you sure , You want delete this User ?')||event.stopImmediatePropagation() "
                                                            wire:click.prevent="deleteusers({{ $user->id }})">
                                                            <i class="fa fa-times text-danger fa-2x"></i></a> DELETE
                                                    </button>






                                                    </button>
                                                </div>
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
    </div>
</div>
