<div class="container" style="margin:100px">


    <h1 style="font-size:25px;color: rgb(62, 62, 62)">Mes competences maitriser :</h1>

    <!-- Small modal -->
    <button type="button" class="btn btn-primary m-2" data-toggle="modal"
        data-target=".bd-example-modal-sm">{{ $users->nom }} {{ $users->prenom }}</button>

    <div class="modal fade bd-example-modal-sm  " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" style="padding: 20px">
                @foreach ($users->competences as $competence)
                    <li>{{ $competence->intitule_competence }} :(niveau:{{ $competence->pivot->niveau }})</li>
                @endforeach

            </div>
        </div>
    </div>

</div>
