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
        </tr>
        @foreach ($listTime as $time)
            <tr>
                <td>{{ $time->id_timekeeping }}</td>
                <td>{{ $time->id_employee }}</td>
                <td>{{ $time->checkin }}</td>
                <td>{{ $time->checkout }}</td>
            </tr>
        @endforeach
    </table>
@endsection
