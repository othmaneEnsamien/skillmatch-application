<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important
        }

        .sclist {
            list-style: none;
        }

        .sclist li {
            line-height: 33px;
            border-bottom: 1px solid #ccc;
        }

        .slink {
            font-size: 16px;
            margin-left: 13px;
        }
    </style>

    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Categories
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addcompetence') }}" class="btn btn-success pull-right">Add
                                    New</a>
                            </div>

                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <div class="panel-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Competence Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($competences as $comp)
                                        <tr>
                                            <td>{{ $comp->id }}</td>
                                            <td>{{ $comp->intitule_competence }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.editcompetences', ['competence_id' => $comp->id]) }}">
                                                    <i class="fa fa-edit fa-2x"></i></a>
                                                <a href="#"
                                                    onclick="confirm('Are you sure , You want delete this Category?')||event.stopImmediatePropagation() "
                                                    wire:click.prevent="deletecompetences({{ $comp->id }})"> <i
                                                        class="fa fa-times text-danger fa-2x"></i></a>
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
    </div>
</div>
