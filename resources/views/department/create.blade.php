@extends('dashboard')
@section('huyen')
    <h1>Thêm Department</h1>
    <form action="{{ route('department.store') }}" method="post">
        @csrf
        tên : <input type="text" name="namePart">
        <input value="1" readonly name="available">
        <button>Thêm</button>
    </form>
@endsection
