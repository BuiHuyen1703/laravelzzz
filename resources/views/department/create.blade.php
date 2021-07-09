@extends('dashboard')
@section('huyen')
    <h1>Thêm Department</h1>
    <form action="{{ route('department.store') }}">
        @csrf
        tên : <input type="text" name="namePart">
        <button>Thêm</button>
    </form>
@endsection
