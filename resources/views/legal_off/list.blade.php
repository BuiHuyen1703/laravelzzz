@extends('dashboard')
@section('huyen')
    <h1>Thông tin các đơn nghỉ</h1>
    <table border="1px">
        <tr>
            <td>tên nhân viên</td>
            <td>Lý do</td>
            <td>Ngày bắt đầu</td>
            <td>Ngày kết thúc</td>
            <td>Note</td>
            <td>approve</td>
            <td></td>
        </tr>
        @foreach ($listLegal as $legal)
            <tr>
                <td>{{ $legal->id_employee }}</td>
                <td>{{ $legal->reason }}</td>
                <td>{{ $legal->strat_time_off }}</td>
                <td>{{ $legal->end_time_off }}</td>
                <td>{{ $legal->note }}</td>
                <td>{{ $legal->approve }}</td>
                <td>
                    <a href="{{ route('legalOff.hide', $legal->id_legal) }}">
                        Hide
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
