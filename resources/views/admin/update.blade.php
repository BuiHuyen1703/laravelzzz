@extends('dashboard')
@section('title', 'Cập nhật lớp')
@section('huyen')
    <h1>Sửa thông tin admin </h1>
    <form action="{{ route('admin.update', $admin->idAdmin) }}" method="post">
        Tên <input type="text" value="{{ $admin->nameAdmin }}"> <br>
        Phone <input type="text" value="{{ $admin->phoneAdmin }}">
        Email <input type="email" value="{{ $admin->emailAdmin }}">
        Pass <input type="text" value="{{ $admin->passAdmin }}">
    </form>
@endsection
