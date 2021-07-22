@extends('dashboard')
@section('title', 'Danh sách Admin')
@section('huyen')

    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">assignment</i>
        </div>
        <div class="card-content">
            <h3 class="card-title">Thông tin Admin </h3>
            <h3>
                <a href="{{ route('admin.create') }}">Thêm Admin</a>
            </h3>
            <form action="">
                <input type="search" value="{{ $search }}" name="search">
                <button>Tìm</button>
            </form>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Họ tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        {{-- <th>Password</th> --}}
                        <th>role</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($listAdmin as $admin)
                        <tr>
                            <td>{{ $admin->name_admin }}</td>
                            <td>{{ $admin->phone_admin }}</td>
                            <td>{{ $admin->email_admin }}</td>
                            {{-- <td>{{ $admin->pass_admin }}</td> --}}
                            <td>{{ $admin->Adminname }}</td>
                            {{-- <td><a class="btn btn-sm btn-primary" href="{{ route('admin.show', $grade->idAdmin) }}">Xem</a></td> --}}
                            <td>
                                <a class="btn btn-sm btn-warning" href="{{ route('admin.edit', $admin->id_admin) }}">
                                    <i class="fa fa-edit"></i>
                                    Sửa
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-danger" href="">
                                    <i class="fa fa-times"></i>
                                    Ẩn
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{ $listAdmin->appends([
        'search' => $search,
    ])->links('') }}
            </div>
        </div>
    </div>
@endsection
