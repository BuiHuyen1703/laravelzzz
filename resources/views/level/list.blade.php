@extends('dashboard')
@section('huyen')
<div class="card">
    <div class="card-header card-header-icon" data-background-color="rose">
        <i class="material-icons">assignment</i>
    </div>
    <div class="card-content">
        <h3 class="card-title">Thông tin level</h3>
        <div class="table-responsive">
    <table class="table">
        <thead class="text-primary">
            <th>Mã level</th>
            <th>Level</th>
            <th>Sửa</th>
            <th>Ẩn</th>

        </thead>
        <tbody>
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
        </tbody>
    </table>
        </div>
    </div>
</div>

@endsection
