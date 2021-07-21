 @extends('dashboard')
 @section('title', 'Thông tin nhân viên')
 @section('huyen')

     <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">assignment</i>
        </div>
        <div class="card-content">
            <h3 class="card-title">Thông tin chi tiết nhân viên</h3>
            <div class="table-responsive">
                <table class="table">
                        <th>Mã nv</th>
                        <th>Họ tên</th>
                        <th>Ngày Sinh</th>
                        <th>Sđt</th>
                        <th>Giới tính</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Lương 1h</th>
                        <th>Level</th>
                        <th>Phòng ban</th>
                        <th>Chức vụ</th>
                        <th></th>
                    <tr>
                        <td>{{ $employee->id_employee }}</td>
                        <td>{{ $employee->name_empployee }}</td>
                        <td>{{ $employee->dateOfBirth }}</td>
                        <td>{{ $employee->phoneNumber }}</td>
                        <td>{{ $employee->NameGender }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->NameStatus }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->password }}</td>
                        <td>{{ $employee->salaryPerHour }}</td>
                        <td>{{ $employee->level }}</td>
                        <td>{{ $employee->name_department }}</td>
                        <td>{{ $employee->name_jobTitle }}</td>
                    </tr>

                </table>
                <a class="btn btn-sm btn-warning" href="{{ route('employee.edit', $employee->id_employee) }}">
                    <i class="fa fa-edit"></i> Sửa
                </a>
                <a class="btn btn-sm btn-danger" href="{{ route('employee.hide', $employee->id_employee) }}">
                    <i class="fa fa-times"></i>Ẩn
                </a>
        </div>
        </div>
    </div>

 @endsection
