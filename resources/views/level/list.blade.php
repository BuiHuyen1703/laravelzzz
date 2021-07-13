@extends('dashboard')
@section('huyen')
    <h1>Thông tin level</h1>
    <table border="1px">
        <tr>
            <td>mã</td>
            <td>level</td>
            <td></td>
            <td></td>
        </tr>
        @foreach ($listLevel as $level)
            <tr>
                <td>{{ $level->id_level }}</td>
                <td>{{ $level->basic_salary }}</td>
                <td><a class="btn btn-sm btn-warning" href="{{ route('level.edit', $level->id_level) }}"><i
                            class="fa fa-edit"></i></a></td>
                <td>
                    <a href="{{ route('level.hide', $level->id_level) }}">
                        Hide
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
