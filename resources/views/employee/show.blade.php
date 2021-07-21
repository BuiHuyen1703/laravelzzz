 @extends('dashboard')
 @section('title', 'Thông tin nhân viên')
 @section('huyen')

     <table class="table">
         {{-- <thead class="text-primary">
             <th>Họ tên</th>
             <th>Ngày Sinh</th>
             <th>Giới tính</th>
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
             <th></th>
         </thead>
         <tr>
             <td>{{ $employee->name_empployee }}</td>
             <td>{{ $employee->dateOfBirth }}</td>
             <td>{{ $employee->NameGender }}</td>
             <td>{{ $employee->phoneNumber }}</td>
             <td>{{ $employee->address }}</td>
             <td>{{ $employee->NameStatus }}</td>
             <td>{{ $employee->email }}</td>
             <td>{{ $employee->password }}</td>
             <td>{{ $employee->salaryPerHour }}</td>
             <td>{{ $employee->level }}</td>
             <td>{{ $employee->name_department }}</td>
             <td>{{ $employee->name_jobTitle }}</td>
             <td><a class="btn btn-sm btn-warning" href="{{ route('employee.edit', $employee->id_employee) }}"><i
                         class="fa fa-edit"></i></a>
             </td>
             <td><a class="btn btn-sm btn-warning" href="{{ route('employee.hide', $employee->id_employee) }}">
                     <i class="fa fa-times"></i>
                 </a>
             </td>
         </tr> --}}
         <tr>
             <td><a class="btn btn-sm btn-warning" href="{{ route('employee.edit', $employee->id_employee) }}"><i
                         class="fa fa-edit"></i>Sửa</a>
             </td>
             <td><a class="btn btn-sm btn-warning" href="{{ route('employee.hide', $employee->id_employee) }}">
                     <i class="fa fa-times"></i>Ẩn
                 </a>
             </td>
         </tr>
         <tr>
             <th>Tên</th>
             <td>{{ $employee->name_empployee }}</td>
         </tr>
         <tr>
             <th>Ngày Sinh</th>
             <td>{{ $employee->dateOfBirth }}</td>
         </tr>
         <tr>
             <th>Giới tính</th>
             <td>{{ $employee->NameGender }}</td>
         </tr>
         <tr>
             <th>Sđt</th>
             <td>{{ $employee->phoneNumber }}</td>
         </tr>
         <tr>
             <th>Địa chỉ</th>
             <td>{{ $employee->name_empployee }}</td>
         </tr>
         <tr>
             <th>Trạng thái</th>
             <td>{{ $employee->name_empployee }}</td>
         </tr>
         <tr>
             <th>Email</th>
             <td>{{ $employee->email }}</td>
         </tr>
         <tr>
             <th>Password</th>
             <td>{{ $employee->password }}</td>
         </tr>
         <tr>
             <th>Lương 1h</th>
             <td>{{ $employee->salaryPerHour }}</td>
         </tr>
         <tr>
             <th>Level</th>
             <td>{{ $employee->level }}</td>
         </tr>
         <tr>
             <th>Phòng ban</th>
             <td>{{ $employee->name_department }}</td>
         </tr>
         <tr>
             <th>Chức vụ</th>
             <td>{{ $employee->name_jobTitle }}</td>
         </tr>
     </table>
 @endsection
