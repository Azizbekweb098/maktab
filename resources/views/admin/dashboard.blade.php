@extends('navbar-section.adminSection')

@section('admin')
{{-- Admin roliga barcha narsalarni ko'rsatish --}}
@role('admin')
    @include('admin.dashboard')
    @include('admin.talim.1-smena.index')
    @include('admin.talim.2-smena.index')
    @include('admin.talim.qoshimcha-dars.index')
    @include('admin.axborot.maktab-yangiliklari.index')
    @include('admin.user.UserTable')
@endrole

{{-- Zavuch roliga faqat zavuchga tegishli qismlarni ko'rsatish --}}
@role('zavuch')
    @include('admin.talim.1-smena.index')
    @include('admin.talim.qoshimcha-dars.index')
    @include('admin.axborot.maktab-yangiliklari.index')
    @include('admin.rahbariyat.index')
@endrole

{{-- Agar foydalanuvchining roli aniqlanmasa --}}
@unlessrole('admin|zavuch')
    <p>Sizda ushbu sahifaga kirish huquqi mavjud emas.</p>
@endunlessrole

@endsection