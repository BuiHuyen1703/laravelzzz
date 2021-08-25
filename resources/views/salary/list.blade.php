@extends('dashboard')
@section('title', 'Salary')

@section('huyen')
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">assignment</i>
        </div>
        <div class="card-content">
            <h3 class="card-title">Thông tin bảng lương</h3>
            {{-- <h4>
                <a href="{{ route('salary.create') }}">Thêm level</a>
            </h4> --}}
            <div class="table-responsive">
                <table class="table">
                    <th>Tên nhân viên</th>
                    <th>Level</th>
                    <th>Chức vụ</th>
                    <th>Lương</th>
                    {{-- <tbody>
                        @foreach ($listSalary as $salary)
                            <tr>
                                <td>{{ $salary->name_level }}</td>
                                <td>{{ $salary->basic_salary }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>

@endsection
