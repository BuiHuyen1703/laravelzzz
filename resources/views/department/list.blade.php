@extends('dashboard')
@section('huyen')
    <h1>Thông tin phòng ban</h1>
    <form action="">
        <table border="1px" align="center" width="100%" height="100px" style="text-align: center;">
            <tr>
                <td>Mã</td>
                <td>Tên</td>
                <td></td>
            </tr>
            @foreach ($listPart as $depart)
                <tr>
                    <td>{{ $depart->id_department }}</td>
                    <td>{{ $depart->name_department }}</td>
                    <td><a href="{{ route('department.edit', $depart->id_department) }}"><i class="fa fa-edit"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('department.hide', $depart->id_department) }}">Ẩn</a>
                    </td>
                </tr>
            @endforeach

        </table>
    </form>

@endsection
