@extends('dashboard')
@section('title', 'Trang chủ')
@section('huyen')



    <div class="card">
        <div class="card-header card-header-icon" data-background-color="green">
            <i class="material-icons">&#xE894;</i>
        </div>
        <div class="card-content">
            <h4 class="card-title">Thống kê</h4>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Mã</th>
                            <th>Mã nhân viên</th>
                            <th>Tên nhân viên</th>
                            <th>Lương cơ bản</th>
                            <th>Ngày công</th>
                            <th>Lương thực nhận</th>
                        </tr>

                    </tbody>
                </table>


            </div>
        </div>
    </div>


@endsection
