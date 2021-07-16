@extends('dashboard')
@section('huyen')
    <h1>Thông tin các đơn nghỉ</h1>
    <table class="table">
        <tr>
            <th>tên nhân viên</th>
            <th>Lý do</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>Note</th>
            <th>approve</th>
            <th>active</th>
            <th></th>
        </tr>
        @foreach ($listLegal as $legal)
            <tr>
                <td>{{ $legal->name_empployee }}</td>
                <td>{{ $legal->reason }}</td>
                <td>{{ $legal->strat_time_off }}</td>
                <td>{{ $legal->end_time_off }}</td>
                <td>{{ $legal->note }}</td>
                <td>{{ $legal->NameApprove }}</td>
                //chư
                <td> <a href="{{ route('haha', $legal->id_legal) }}">duyệt</a>|<a
                        href="{{ route('hihi', $legal->id_legal) }}">KD</a>
                </td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('legalOff.hide', $legal->id_legal) }}">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $listLegal->links('') }}
@endsection
