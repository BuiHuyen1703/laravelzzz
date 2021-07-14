@extends('dashboard')
@section('huyen')
    <h1>Thông tin job title</h1>
    <table class="table">
        <tr>
            <th>mã</th>
            <th>tên</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($listJob as $jobTitle)
            <tr>
                <td>{{ $jobTitle->id_jobTitle }}</td>
                <td>{{ $jobTitle->name_jobTitle }}</td>
                <td><a class="btn btn-sm btn-warning" href="{{ route('jobTitle.edit', $jobTitle->id_jobTitle) }}"><i
                            class="fa fa-edit"></i></a></td>
                <td>
                    <a href="{{ route('jobTitle.hide', $jobTitle->id_jobTitle) }}">
                        Hide
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
