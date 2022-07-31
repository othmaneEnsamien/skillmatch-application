<div>
  <br>
  <br>
  <br>
  <button type="button" class="btn btn-success">Add</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employees as $employee)
    <tr>
      <th scope="row">{{$employee->id}}</th>
      <td>{{$employee->prenom}}</td>
      <td>{{$employee->nom}}</td>
      <td>{{$employee->email}}</td>
      <td><button type="button" class="btn btn-outline-primary">Edit</button>
<button type="button" class="btn btn-outline-secondary">Delete</button></td>
    </tr>
    @endforeach
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
