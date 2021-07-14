@extends('dashboard')
@section('huyen')
    <h1>Thông tin phòng ban</h1>
    <form action="">
        <table class="table">
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th></th>
            </tr>
            @foreach ($listPart as $depart)
                <tr>
                    <td>{{ $depart->id_department }}</td>
                    <td>{{ $depart->name_department }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('department.edit', $depart->id_department) }}"><i
                                class="fa fa-edit"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('department.hide', $depart->id_department) }}"><i
                                class="fa fa-times"></i></a>
                    </td>
                </tr>
            @endforeach

        </table>
    </form>

@endsection
