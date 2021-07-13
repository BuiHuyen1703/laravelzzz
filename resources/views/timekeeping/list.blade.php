@extends('dashboard')
@section('huyen')
    <h1>Thông tin chấm công
    </h1>
    <table border="1px" width="100%">
        <tr>
            <td>Mã</td>
            <td>tên nhân viên</td>
            <td>Checkin</td>
            <td>Checkout</td>
            <td></td>
        </tr>
        @foreach ($listTime as $time)
            <tr>
                <td>{{ $time->id_timekeeping }}</td>
                <td>{{ $time->id_employee }}</td>
                <td>{{ $time->checkin }}</td>
                <td>{{ $time->checkout }}</td>
                <td>
                    <a href="{{ route('timekeeping.hide', $time->id_timekeeping) }}">
                        Hide
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
