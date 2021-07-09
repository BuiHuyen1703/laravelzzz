@extends('dashboard')
@section('huyen')
    <h1>Thông tin level</h1>
    <table border="1px">
        <tr>
            <td>mã</td>
            <td>level</td>
        </tr>
        @foreach ($listLevel as $level)
            <tr>
                <td>{{ $level->id_level }}</td>
                <td>{{ $level->name_levelphp }}</td>
            </tr>
        @endforeach
    </table>
@endsection
