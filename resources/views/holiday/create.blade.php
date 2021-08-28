@extends('dashboard')
@section('huyen')
    <form action="{{ route('holiday.store') }}" method="post">
        @csrf

        tên: <input type="text" name="name_holiday">
        ngay: <input type="date" name="date_holiday">
        <button>Thêm</button>
    </form>
@endsection
