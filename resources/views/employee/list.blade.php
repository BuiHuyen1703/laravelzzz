@extends('dashboard')
@section('huyen')
    <<<<<<< HEAD <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">assignment</i>
        </div>
        <div class="card-content">
            <h3 class="card-title">Thông tin nhân viên</h3>
            <div class="table-responsive">
                {{-- <h1>Thông tin nhân viên</h1> --}}
                <a href="{{ route('employee.insert-excel') }}">Thêm bằng excel</a> <br>
                <a href="">Thêm nhân viên</a>
                <form action="">
                    <input type="search" value="{{ $search }}" name="search">
                    <button>Tìm</button>
                </form>
                <table class="table">
                    <thead class="text-primary">
                        <th>Mã nhân viên</th>
                        <th>Họ tên</th>
                        <th>Ngày Sinh</th>
                        <th>Sđt</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Lương 1h</th>
                        <th>Phòng ban</th>
                        <th>Chức vụ</th>
                        <th></th>
                    </thead>

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
                            <td><a class="btn btn-sm btn-warning"
                                    href="{{ route('employee.edit', $emp->id_employee) }}"><i class="fa fa-edit"></i></a>
                            </td>
                            <td><a class="btn btn-sm btn-warning" href="{{ route('employee.hide', $emp->id_employee) }}">
                                    <i class="fa fa-times"></i>
                                </a>
                            </td>
            </div>

        </div>
        {{ $listEmp->appends([
        'search' => $search,
    ])->links('') }}
    @endsection
