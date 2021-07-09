@extends('dashboard')
@section('huyen')
    <h1>Thông tin job title</h1>
    <table border="1px">
        <tr>
            <td>mã</td>
            <td>tên</td>
        </tr>
        @foreach ($listJob as $jobTitle)
            <tr>
                <td>{{ $jobTitle->id_jobTitle }}</td>
                <td>{{ $jobTitle->name_jobTitle }}</td>
            </tr>
        @endforeach
    </table>

@endsection
