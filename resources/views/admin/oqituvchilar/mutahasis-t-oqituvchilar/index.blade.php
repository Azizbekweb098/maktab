@extends('navbar-section.adminSection')

@section('admin')
<br>
<br>
<br>
<div class="table-responsive" style="margin-left: 340px">

  <a href="{{ route('mutaxasiz.create') }}" class="btn btn-primary">Create</a>

  <br>
  <br>
    <table class="table table-sm table-striped table-bordered table-hover" style="width: 80%; height: auto;">

<thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">lastname</th>
      <th scope="col">image</th>
      <th scope="col">ishi</th>
  </tr>
</thead>
@foreach ($mutahasiz as $bir )
<tbody>

  <tr>
      <td>{{ $bir->id }}</td>
      <td>{{ $bir->name }}</td>
      <td>{{ $bir->lastname }}</td>
     
      <td><img src="{{ asset('images/' . $bir->image) }}" width="100"></td>
      <td>{{ $bir->ishi }}</td>
  </tr>
    

</tbody>
@endforeach
    </table>
</div>
@endsection
