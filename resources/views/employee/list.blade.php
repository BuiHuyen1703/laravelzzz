@extends('dashboard')
@section('title', 'Nhân viên')

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

                <table class="table">
                    <thead class="text-primary">
                        <th>Tên nhân viên</th>
                        <th>Trạng thái</th>
                        <th>Chi tiết</th>
                        <th></th>
                    </thead>
                    @foreach ($listEmp as $emp)
                        <tr>

                            <td>{{ $emp->name_empployee }}</td>
                            <td>{{ $emp->NameStatus }}</td>
                            <td><a class="btn btn-sm btn-watch" href="{{ route('employee.show', $emp->id_employee) }}"><i
                                        class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $listEmp->appends(['search' => $search])->links('') }}
            </div>
        </div>
    </div>

@endsection
