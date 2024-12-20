@extends('navbar-section.adminSection')

@section('admin')
<br>
<br>
<br>
<div class="table-responsive" style="margin-left: 340px">

  <a href="{{ route('zams.create') }}" class="btn btn-primary">Create</a>

  <br>
  <br>
    <table class="table table-sm table-striped table-bordered table-hover" style="width: 80%; height: auto;">

<thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">lastname</th>
      <th scope="col">image</th>
  </tr>
</thead>
@foreach ($zamD as $zam )
<tbody>

  <tr>
      <td>{{ $zam->id }}</td>
      <td>{{ $zam->name }}</td>
      <td>{{ $zam->lastname }}</td>
      <td><img src="{{ asset('images/' . $zam->image) }}" width="100"></td>
  </tr>
    

</tbody>
@endforeach
    </table>
</div>
@endsection
