@extends('dashboard')
@section('huyen')
    <h1>Thông tin admin </h1>
    <table border="1px" width="100%">
        <tr>
            <th>Ten</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Pass</th>
            <th>role</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($listAdmin as $admin)
            <tr>
                <td>{{ $admin->name_admin }}</td>
                <td>{{ $admin->phone_admin }}</td>
                <td>{{ $admin->email_admin }}</td>
                <td>{{ $admin->pass_admin }}</td>
                <td>{{ $admin->role }}</td>
                {{-- <td><a class="btn btn-sm btn-primary" href="{{ route('admin.show', $grade->idAdmin) }}">Xem</a></td> --}}
                <td><a class="btn btn-sm btn-warning" href="{{ route('admin.edit', $admin->id_admin) }}"><i
                            class="fa fa-edit"></i></a></td>
                <td>
                    <form action="{{ route('admin.destroy', $admin->id_admin) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

@endsection
