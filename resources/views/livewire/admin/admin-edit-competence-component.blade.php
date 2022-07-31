<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6" style="padding: 10px">
                                Edit New Competence
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.competences') }}" class="btn btn-success pull-right">All
                                    Competence</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" style="background: rgb(208, 208, 208)">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form wire:submit.prevent="updatecompetence" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-4 control-label p-2">Competence Name</div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Competence Name" class="m-4 form-control inpu-md"
                                        wire:model="intitule_competence">
                                    @error('intitule_competence')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 control-label"></div>
                                <div class="col-md-4 p-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
