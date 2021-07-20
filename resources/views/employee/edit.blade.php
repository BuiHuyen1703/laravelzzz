@extends('dashboard')
@section('title', 'Cập nhật thông tin nhân viên')
@section('huyen')
    <h1>Sửa thông tin nhân viên </h1>
    <form action="{{ route('employee.update', $employee->id_employee) }}" method="post">
        @csrf
        @method("PUT")
        Tên <input type="text" value="{{ $employee->name_empployee }}" name="name"> <br>
        Lương 1 giờ <input type="text" value="{{ $employee->salaryPerHour }}" name="salaryperhouse"><br>

        <button>Sửa</button>
    </form>
@endsection
