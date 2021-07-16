@extends('dashboard')
@section('huyen')
    <h1>Thông tin nhân viên</h1>
    <a href="{{ route('employee.insert-excel') }}">Thêm bằng excel</a>
    <form action="">
        <input type="search" value="{{ $search }}" name="search">
        <button>Tìm</button>
    </form>
    <table class="table">
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
            <td></td>
        </tr>

        @foreach ($listEmp as $emp)
            <tr>
                <td>{{ $emp->name_empployee }}</td>
                <td>{{ $emp->dateOfBirth }}</td>
                <td>{{ $emp->NameGender }}</td>
                <td>{{ $emp->phoneNumber }}</td>
                <td>{{ $emp->address }}</td>
                <td>{{ $emp->NameStatus }}</td>
                <td>{{ $emp->email }}</td>
                <td>{{ $emp->password }}</td>
                <td>{{ $emp->salaryPerHour }}</td>
                <td>{{ $emp->level }}</td>
                <td>{{ $emp->name_department }}</td>
                <td>{{ $emp->name_jobTitle }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('employee.hide', $emp->id_employee) }}">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $listEmp->appends([
        'search' => $search,
    ])->links('') }}
@endsection
