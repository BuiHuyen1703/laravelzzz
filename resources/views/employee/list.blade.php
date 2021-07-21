@extends('dashboard')
@section('title','Nhân viên')

@section('huyen')
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">assignment</i>
        </div>
        <div class="card-content">
            <h3 class="card-title">Thông tin nhân viên</h3>
            <form action="">
                <input type="search" value="{{ $search }}" name="search">
                <button>Tìm</button>
            </form>
            <div class="table-responsive">
                {{-- <h1>Thông tin nhân viên</h1> --}}
                <a href="{{ route('employee.insert-excel') }}">Thêm bằng excel</a> <br>
                <a href="">Thêm nhân viên</a>

                <table class="table table-hover">
                        <th>Mã nhân viên</th>
                        <th>Họ tên</th>
                        <th>Giới tính</th>
                        <th>Ngày Sinh</th>
                        <th>Phòng ban</th>
                        <th>Chức vụ</th>
                        <th>level</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    <tbody>
                    @foreach ($listEmp as $emp)
                        <tr>
                            <td align="center">{{ $emp->id_employee }}</td>
                            <td>{{ $emp->name_empployee }}</td>
                            <td>{{ $emp->NameGender }}</td>
                            <td>{{ $emp->dateOfBirth }}</td>
                            <td>{{ $emp->name_department }}</td>
                            <td>{{ $emp->name_jobTitle }}</td>
                            <td>{{ $emp->level }}</td>
                            <td>
                            <td>
                                <a class="btn btn-info btn-sm btn-watch" href="{{ route('employee.show', $emp->id_employee) }}">
                                    <i class="fa fa-edit"></i> Chi tiết
                                </a>
                            </td>
                            {{-- <td>
                                <a class="btn btn-sm btn-warning"
                                    href="{{ route('employee.edit', $emp->id_employee) }}">
                                    <i class="fa fa-edit"></i> Sửa
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-danger" href="{{ route('employee.hide', $emp->id_employee) }}">
                                    <i class="fa fa-times"></i>Ẩn
                                </a>
                            </td> --}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $listEmp->appends(['search' => $search])->links('') }}
            </div>
        </div>
    </div>

@endsection
