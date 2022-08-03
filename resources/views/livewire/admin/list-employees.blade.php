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
                                    <th>projet</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($projects as $project)
                                    <tr>
                                        <th scope="row"></th>

                                        <td> {{ $project->intitule_projet }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
