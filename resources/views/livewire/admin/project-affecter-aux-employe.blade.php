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
                            <h2 style="color:#13404D ;font-family:Roboto Slab">Trouvez l’employé idéal pour votre projet
                            </h2>



                            {{-- <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="Search ..." wire:model="searchTerm">
                            </div> --}}

                        </div>


                    </div>
                    <div class="row mb-4">


                        <input type="search" class="form-control w-35" placeholder="niveau..."
                            wire:model="searchTerm1" />
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
                                <th>specialite</th>
                                <th>date d integration</th>
                                <th>competence requis </th>
                                <th>Projet</th>


                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($users as $user)
                                @if ($user->type == 'USR')
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->specialite }}</td>
                                        <td>{{ $user->date_integration }}</td>


                                        <td>
                                            <ul class="sclist">

                                                @foreach ($user->competences as $pa)
                                                    <li><i class="fa "></i>{{ $pa->intitule_competence }} :
                                                        (niveau= {{ $pa->pivot->niveau }})
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </td>
                                        <td>
                                            {{-- @foreach ($user->competences as $c)
                                                    @foreach ($projets as $projet)
                                                        @foreach ($projet->competences as $p)
                                                            @if ($c->intitule_competence == $p->intitule_competence && $c->pivot->niveau >= $p->pivot->niveau_requis_projet)
                                                                @foreach ($competences->projects as $pro)
                                                                    {{ $pro->intitule_projet }}
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                @endforeach --}}
                                            @foreach ($user->competences as $c)
                                                @if ($c->pivot->niveau >= 3)
                                                    @foreach ($comp as $p)
                                                        {{ $p->intitule_projet }}
                                                    @endforeach
                                                @endif
                                            @endforeach

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
