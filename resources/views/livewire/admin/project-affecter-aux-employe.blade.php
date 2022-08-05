<div>
    <style>
        nav svg {
            height: 20px;

        }

        /* .items-center {
            margin-top: 50px;
            background: white
        } */

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
                    <div class="row  mb-4">
                        {{-- <div class="col-md-4 mb-4">
                            <input type="search" class="form-control w-35" placeholder="competence..."
                                wire:model="searchTermC" />
                        </div>
                        <div class="col-md-4 mb-4">
                            <input type="search" class="form-control w-35" placeholder="niveau..."
                                wire:model="searchTermN" />
                        </div> --}}
                        <div class="col-md-4 mb-4">
                            <input type="search" class="form-control w-35" placeholder="projet..."
                                wire:model="searchTermP" />
                        </div>

                    </div>


                </div>
                <div class="panel-body">
                    {{-- @if (Session::has('message'))
                             <div class="alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif --}}
                    @if ($this->searchTermP == '' && $this->searchTermN == '' && $this->searchTermC == '')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>nom</th>
                                    <th>prenom</th>
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
                                            <td>
                                                <ul class="sclist">
                                                    @foreach ($user->competences as $pa)
                                                        @if ($pa->pivot->niveau != null)
                                                            <li><i class="fa "></i>{{ $pa->intitule_competence }} :
                                                                (niveau= {{ $pa->pivot->niveau }})
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </td>
                                            <td>
                                                @foreach ($projectss as $pro)
                                                    @foreach ($pro->competences as $p)
                                                        @foreach ($user->competences as $uc)
                                                            @if ($p->pivot->niveau_requis_projet <= $uc->pivot->niveau && $uc->intitule_competence == $p->intitule_competence)
                                                                <li>{{ $pro->intitule_projet }}</li>
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                @endforeach
                                            </td>




                                        </tr>
                                    @endif
                                @endforeach


                            </tbody>

                        </table>
                        {{ $users->links('pagination-links') }}


                    @endif
                    @if ($this->searchTermP != '')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>nom</th>
                                    <th>prenom</th>
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
                                            <td>
                                                <ul class="sclist">

                                                    @foreach ($user->competences as $pa)
                                                        @if ($pa->pivot->niveau != null)
                                                            <li><i class="fa "></i>{{ $pa->intitule_competence }} :
                                                                (niveau= {{ $pa->pivot->niveau }})
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </td>
                                            <td>
                                                @foreach ($projectss1 as $pro)
                                                    @foreach ($pro->competences as $p)
                                                        @foreach ($user->competences as $uc)
                                                            @if ($p->pivot->niveau_requis_projet < $uc->pivot->niveau && $uc->intitule_competence == $p->intitule_competence)
                                                                @if ($p->pivot->niveau_requis_projet != null)
                                                                    -{{ $pro->intitule_projet }}
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                @endforeach

                                            </td>




                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    @endif
                    @if ($this->searchTermC != '')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>competence requis </th>
                                    <th>Projet</th>


                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($usersss as $user)
                                    @if ($user->type == 'USR')
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->nom }}</td>
                                            <td>{{ $user->prenom }}</td>
                                            <td>
                                                <ul class="sclist">

                                                    @foreach ($user->competences as $pa)
                                                        @if ($pa->pivot->niveau != null)
                                                            <li><i class="fa "></i>{{ $pa->intitule_competence }} :
                                                                (niveau= {{ $pa->pivot->niveau }})
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                </ul>
                                            </td>
                                            <td>
                                                @foreach ($projectss1 as $pro)
                                                    @foreach ($pro->competences as $p)
                                                        @foreach ($user->competences as $uc)
                                                            @if ($p->pivot->niveau_requis_projet < $uc->pivot->niveau && $uc->intitule_competence == $p->intitule_competence)
                                                                @if ($p->pivot->niveau_requis_projet != null)
                                                                    -{{ $pro->intitule_projet }}
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                @endforeach

                                            </td>




                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
</div>
