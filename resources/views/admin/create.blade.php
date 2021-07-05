@extends('dashboard')
@section('title', 'Thêm admin')
@section('huyen')
    <h1>Thêm Admin</h1>
    <form action="{{ route('admin.store') }}" method="post">
        @csrf

        Ten : <input type="text" name="name_admin"><br>
        Phone : <input type="text" name="phone_admin"><br>
        Email : <input type="text" name="email_admin"><br>
        Password : <input type="text" name="pass_admin"><br>
        <button>Thêm</button>
    </form>
@endsection
