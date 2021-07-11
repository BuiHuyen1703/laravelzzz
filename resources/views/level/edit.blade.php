@extends('dashboard')
@section('huyen')
    <h1>Sửa level</h1>
    <form action="{{ route('level.update', $level->id_level) }}" method="post">
        @csrf
        @method("PUT")
        Tên <input type="text" value="{{ $level->basic_salary }}" name="basic_salary"><br>
        <button>Sửa</button>
    </form>
@endsection
