@extends('dashboard')
@section('title','Bảng chấm công')

@section('huyen')
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">assignment</i>
        </div>
        <div class="card-content">
            <h3 class="card-title">Thông tin chấm công</h3>
            <div class="table-responsive">
                <table class="table">

                        <tr></tr>
                        <th>Mã chấm công</th>
                        <th>Mã nhân viên</th>
                        <th>Tên nhân viên</th>
                        <th>Checkin</th>
                        <th>Checkout</th>
                        <th></th>

                    <tbody>
                        @foreach ($listTime as $time)
                            <tr>
                                <td>{{ $time->id_timekeeping }}</td>
                                <td>{{ $time->id_employee }}</td>
                                <td>{{ $time->name_empployee }}</td>
                                <td>{{ $time->checkin }}</td>
                                <td>{{ $time->checkout }}</td>
                                <td>
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('timekeeping.hide', $time->id_timekeeping) }}">
                                        <i class="fa fa-times"></i>Ẩn
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $listTime->links('') }}
@endsection
