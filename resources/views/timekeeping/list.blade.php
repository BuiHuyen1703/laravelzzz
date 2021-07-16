@extends('dashboard')
@section('huyen')
    <h1>Thông tin chấm công
    </h1>
    <table class="table">
        <tr>
            <th>Mã</th>
            <th>tên nhân viên</th>
            <th>Checkin</th>
            <th>Checkout</th>
            <th></th>
        </tr>
        @foreach ($listTime as $time)
            <tr>
                <td>{{ $time->id_timekeeping }}</td>
                <td>{{ $time->id_employee }}</td>
                <td>{{ $time->checkin }}</td>
                <td>{{ $time->checkout }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('timekeeping.hide', $time->id_timekeeping) }}">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $listTime->links('') }}
@endsection
