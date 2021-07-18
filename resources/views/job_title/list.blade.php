@extends('dashboard')
@section('huyen')
<div class="card">
    <div class="card-header card-header-icon" data-background-color="rose">
        <i class="material-icons">assignment</i>
    </div>
    <div class="card-content">
        <h3 class="card-title">Thông tin chức vụ</h3>
        <div class="table-responsive">
            <h4><a href="{{ route('jobTitle.create') }}">Thêm chức vụ</a></h4>
            <table class="table">
                <thead class="text-primary">
                    <th>Mã chức vụ</th>
                    <th>Tên chức vụ</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($listJob as $jobTitle)
                    <tr align="center">
                            <td>{{ $jobTitle->id_jobTitle }}</td>
                            <td>{{ $jobTitle->name_jobTitle }}</td>
                            <td><a class="btn btn-sm btn-warning" href="{{ route('jobTitle.edit', $jobTitle->id_jobTitle) }}"><i
                                        class="fa fa-edit"></i> Sửa</a></td>
                            <td>
                                <a class="btn btn-danger"href="{{ route('jobTitle.hide', $jobTitle->id_jobTitle) }}">
                                    Hide
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
