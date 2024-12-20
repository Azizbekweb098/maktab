@extends('navbar-section.adminSection')

@section('admin')
<br>
<br>
<br>
<div class="table-responsive" style="margin-left: 340px">

  <a href="{{ route('manaviyatchi.create') }}" class="btn btn-primary">Create</a>

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
@foreach ($manaviyat as $man )
<tbody>

  <tr>
      <td>{{ $man->id }}</td>
      <td>{{ $man->name }}</td>
      <td>{{ $man->lastname }}</td>
      <td><img src="{{ asset('images/' . $man->image) }}" width="100"></td>
  </tr>
    

</tbody>
@endforeach
    </table>
</div>
@endsection
