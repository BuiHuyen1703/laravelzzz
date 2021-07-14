@extends('dashboard')
@section('huyen')
    <h1>Thông tin level</h1>
    <table class="table">
        <tr>
            <th>mã</th>
            <th>level</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($listLevel as $level)
            <tr>
                <td>{{ $level->id_level }}</td>
                <td>{{ $level->basic_salary }}</td>
                <td><a class="btn btn-sm btn-warning" href="{{ route('level.edit', $level->id_level) }}"><i
                            class="fa fa-edit"></i></a></td>
                <td>
                    <a class="btn btn-sm btn-danger" href="{{ route('level.hide', $level->id_level) }}">
                        <i class="fa fa-times"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
