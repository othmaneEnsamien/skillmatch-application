{{-- <div class="container" style="margin:100px">


    <h1 style="font-size:25px;color: rgb(62, 62, 62)">Mes competences maitriser :</h1>

    <!-- Small modal -->
    <button type="button" class="btn btn-primary m-2" data-toggle="modal"
        data-target=".bd-example-modal-sm">{{ $users->nom }} {{ $users->prenom }}</button>

    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" style="padding: 20px">
                @foreach ($users->competences as $competence)
                    @if ($competence->pivot->niveau != null)
                        <li>{{ $competence->intitule_competence }} :(niveau:{{ $competence->pivot->niveau }})</li>
                    @endif
                @endforeach

            </div>
        </div>
    </div>

</div> --}}
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

                    <table class="table table-striped p-10">
                        <thead>
                            <tr>
                                <th>Mes competences</th>
                            </tr>
                        </thead>

                        <tbody>


                            <tr>

                                <td style="padding: 30px">

                                    @foreach ($users->competences as $competence)
                                        @if ($competence->pivot->niveau != null)
                                            <li>{{ $competence->intitule_competence }}
                                                :(niveau:{{ $competence->pivot->niveau }})</li>
                                        @endif
                                    @endforeach
                                </td>
                            </tr>


                        </tbody>
                    </table>




                </div>
            </div>
        </div>
    </div>
</div>
</div>
