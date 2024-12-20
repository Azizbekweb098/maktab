@extends('navbar-section.adminSection')

@section('admin')
<br>
<br>
<br>
<div class="table-responsive" style="margin-left: 340px">
  <a href="{{ route('q-darslar.create') }}" class="btn btn-primary">Create</a>
  <br>
  <br>
    <table class="table table-sm table-striped table-bordered table-hover" style="width: 80%; height: auto;">

<thead>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">dars jadvali</th>
      <th scope="col">sinf</th>
  </tr>
</thead>
@foreach ($qoshimcha as $user )
<tbody>

  <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->file }}</td>
</tbody>
@endforeach
    </table>
</div>
@endsection
