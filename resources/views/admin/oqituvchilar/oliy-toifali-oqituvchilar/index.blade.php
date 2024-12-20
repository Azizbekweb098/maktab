@extends('navbar-section.adminSection')

@section('admin')
<br>
<br>
<br>
<div class="table-responsive" style="margin-left: 340px">

  <a href="{{ route('oliy.create') }}" class="btn btn-primary">Create</a>

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
@foreach ($oliys as $oliy )
<tbody>

  <tr>
      <td>{{ $oliy->id }}</td>
      <td>{{ $oliy->name }}</td>
      <td>{{ $oliy->lastname }}</td>
      <td><img src="{{ asset('images/' . $oliy->image) }}" width="100"></td>
      <td>{{ $oliy->ishi }}</td>
  </tr>
    

</tbody>
@endforeach
    </table>
</div>
@endsection
