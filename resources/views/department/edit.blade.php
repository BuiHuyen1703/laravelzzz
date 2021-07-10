@extends('dashboard')
@section('huyen')
    <h1>Sửa department</h1>
    <form action="{{ route('department.update', $dep->id_department) }}" method="post">
        @csrf
        @method("PUT")
        Tên <input type="text" value="{{ $dep->name_department }}" name="name_dep"><br>
        <button>Sửa</button>
    </form>
@endsection
