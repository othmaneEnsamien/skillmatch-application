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




                </div>
            </div>
        </div>
    </div>
</div>
</div>
