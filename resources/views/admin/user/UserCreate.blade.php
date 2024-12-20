@extends('navbar-section.adminSection')

@section('admin')
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="container mt-4" style="margin-left: 320px">
        <div class="mb-3">
            <label for="name" class="form-label">Ism</label>
            <input type="text" class="form-control form-control-sm w-75" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-sm w-75" name="email" id="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Parol</label>
            <input type="password" class="form-control form-control-sm w-75" name="password" id="password" required>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Rolni tanlang</label>
            <select name="role" id="role" class="form-select form-select-sm w-75" required>
                @foreach($roles as $role)
                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Yuborish</button>
    </div>
</form>
@endsection
