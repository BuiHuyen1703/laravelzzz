@extends('dashboard')
@section('huyen')
    <h1>Thông tin nhân viên</h1>
    <table border="1px">
        <tr>
            <td>Tên </td>
            <td>Ngày sinh</td>
            <td>Giới tính</td>
            <td>Sđt</td>
            <td>Địa chỉ</td>
            <td>Trạng thái</td>
            <td>Email</td>
            <td>Pass</td>
            <td>Lương 1h </td>
            <td>Level</td>
            <td>Dep</td>
            <td>Job</td>
        </tr>
        @foreach ($listEmp as $emp)
            <tr>
                <td>{{ $emp->id_employee }}</td>
                <td>{{ $emp->dateOfBirth }}</td>
                <td>{{ $emp->gender }}</td>
                <td>{{ $emp->phone_number }}</td>
                <td>{{ $emp->address }}</td>
                <td>{{ $emp->status }}</td>
                <td>{{ $emp->email }}</td>
                <td>{{ $emp->password }}</td>
                <td>{{ $emp->salaryPerHour }}</td>
                <td>{{ $emp->id_level }}</td>
                <td>{{ $emp->id_department }}</td>
                <td>{{ $emp->id_jobTitle }}</td>
            </tr>
        @endforeach
    </table>
@endsection
