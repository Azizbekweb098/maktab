@extends('navbar-section.adminSection')

@section('admin')
<form action="{{ route('galeriya.store') }}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="container mt-4" style="margin-left: 320px">
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="file" class="form-control form-control-sm w-75" name="image" id="image" required>
        </div>

   

        <button type="submit" class="btn btn-primary">Yuborish</button>
    </div>
</form>
@endsection
