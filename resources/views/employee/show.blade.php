 @extends('dashboard')
 @section('title', 'Cập nhật employee')
 @section('huyen')
     <h1>Thông tin nhân viên </h1>

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
         </tr>
     </table>
 @endsection
