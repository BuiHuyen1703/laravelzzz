@extends('dashboard')
@section('huyen')
    <div class="card">
        <div class="card-header card-header-icon" data-background-color="rose">
            <i class="material-icons">assignment</i>
        </div>
        <div class="card-content">
            <h3 class="card-title">Thông tin ngày nghỉ lễ</h3>
            <div class="table-responsive">
                <a href="{{ route('holiday.create') }}">Thêm ngay nghỉ</a>
                <table class="table">
                    <tr>
                        <th>Tên</th>
                        <th>Ngày</th>
                    </tr>
                    @foreach ($listHoliday as $holi)
                        <tr>
                            <td>{{ $holi->name_holiday }}</td>
                            <td>{{ $holi->date_holiday }}</td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
