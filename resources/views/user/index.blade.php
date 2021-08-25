@extends('user.layout.app')

@section('title', 'Trang chủ')

@section('user')
    <?php use Carbon\Carbon; ?>
    <div class="row">
        {{-- checkin --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">today</i>
                </div>
                {{-- @if
                    (session('id')) {{ session('id')->id_admin ?? session('id')->id_employee }}
                @endif --}}
                <form action="{{ route('timekeeping.store') }}" method="post">
                    @csrf
                    <div class="card-content">
                        <h3 class="card-title">Check in</h3>
                        <div class="form-group">
                            <input type="hidden" name="id_employee" value="@if (session('user')) {{ session('user')->id_admin ?? session('user')->id_employee }} @endif ">
                            <label class="label-control">Ngày/Giờ check in</label>
                            <input type="text" class="form-control datetimepicker"
                                value="{{ Carbon::now('Asia/Ho_Chi_Minh') }}" name="checkin" />
                        </div>
                        <button class="btn btn-primary" type="date">Check in</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- checkout --}}
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="red">
                    <i class="material-icons">today</i>
                </div>
                <form action="{{ route('timekeeping.update',session('user')) }}" method="POST">
                    @method("PUT")
                    @csrf
                    <div class="card-content">
                        <h3 class="card-title">Check out</h3>
                        <div class="form-group">
                            <input type="hidden" name="id_employee" value="@if (session('user')) {{ session('user')->id_admin ?? session('user')->id_employee }} @endif ">
                            <label class="label-control">Ngày/Giờ check out</label>
                            <input type="text" class="form-control datetimepicker"
                                value="{{ Carbon::now('Asia/Ho_Chi_Minh') }}" name="checkout" />
                        </div>
                        <button class="btn btn-danger">Check out</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">mail_outline</i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Đơn xin nghỉ</h3>
                    <form method="post" action="{{ route('legalOff.store') }}">
                        @csrf
                        <div class="form-group label-floating">
                            <input type="hidden" name="id_employee" value="{{ session('user')->id_employee }}">
                            <label class="control-label">Tên </label>
                            <input class=" form-control" name="name_emp" value="{{ session('user')->name_empployee }}">
                        </div>
                        <div class=" form-group label-floating ">
                            <label class=" control-label">Lý do</label>
                            <input type="text" class="form-control" name="reason">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Ghi chú</label>
                            <input type="text" class="form-control" name="note">
                        </div>
                        <div class="form-group label-floating">
                            <label>Nghỉ từ ngày</label>
                            <input type="date" class="form-control timepicker" name="start_time_off" />
                        </div>
                        <div class="form-group label-floating">
                            <label>Đến hết ngày ngày</label>
                            <input type="date" class="form-control datepicker" name="end_time_off" />
                        </div>
                        <div class="form-group label-floating">
                            <input type="hidden" class="form-control datepicker" name="available" value="1" />
                            <input type="hidden" class="form-control datepicker" name="available" />
                        </div>
                        <button type="submit" class="btn btn-fill btn-primary">Gửi</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
