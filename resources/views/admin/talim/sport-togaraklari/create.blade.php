@extends('navbar-section.adminSection')

@section('admin')
<form action="{{ route('sport-t.store') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="container mt-4" style="margin-left: 320px">
        <input type="file" name="file">

        <div class="mb-3">
            <label for="sinf" class="form-label">sinf</label>
            <input type="text" class="form-control form-control-sm w-75" name="name"  required>
        </div>

   

        <button type="submit" class="btn btn-primary">Yuborish</button>
    </div>
</form>
@endsection
