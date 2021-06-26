@extends('dashboard')
@section('huyen')
    <h1>Thông tin admin </h1>
    <table>
        <tr>
            <th>Ten</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Pass</th>
        </tr>
        @foreach ($listAdmin as $admin)
            <tr>
                <td>{{ $admin->name_admin }}</td>
                <td>{{ $admin->phone_admin }}</td>
                <td>{{ $admin->email_admin }}</td>
                <td>{{ $admin->pass_admin }}</td>
            </tr>
        @endforeach

    </table>

@endsection
