@extends('dashboard')
@section('huyen')
    <h1>Thông tin job title</h1>
    <table border="1px">
        <tr>
            <td>mã</td>
            <td>tên</td>
            <td></td>
            <td></td>
        </tr>
        @foreach ($listJob as $jobTitle)
            <tr>
                <td>{{ $jobTitle->id_jobTitle }}</td>
                <td>{{ $jobTitle->name_jobTitle }}</td>
                <td><a class="btn btn-sm btn-warning" href="{{ route('jobTitle.edit', $jobTitle->id_jobTitle) }}"><i
                            class="fa fa-edit"></i></a></td>
                <td>
                    <form action="{{ route('jobTitle.destroy', $jobTitle->id_jobTitle) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
