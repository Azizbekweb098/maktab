@extends('navbar-section.adminSection')

@section('admin')
<br>
<br>
<br>
<div class="table-responsive" style="margin-left: 340px">
  @if ($buttonView)
  <a href="{{ route('rahbariyat.create') }}" class="btn btn-primary">Create</a>
  @endif
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
@foreach ($rahbariyat as $rah )
<tbody>

  <tr>
      <td>{{ $rah->id }}</td>
      <td>{{ $rah->name }}</td>
      <td>{{ $rah->lastname }}</td>
      <td><img src="{{ asset('images/' . $rah->image) }}" width="100"></td>
  </tr>
    

</tbody>
@endforeach
    </table>
</div>
@endsection
