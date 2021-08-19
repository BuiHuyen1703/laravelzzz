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
                <form action="action={{ route('timekeeping.store') }}" method="post">
                    @csrf
                    <div class="card-content">
                        <h3 class="card-title">Check in</h3>
                        <div class="form-group">
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
                <form action="">
                    <div class="card-content">
                        <h3 class="card-title">Check out</h3>
                        <div class="form-group">
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
                    <form method="#" action="#">
                        <div class="form-group label-floating">
                            <label class="control-label">Lý do</label>
                            <input type="text" class="form-control" name="reason">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Ghi chú</label>
                            <input type="text" class="form-control" name="note">
                        </div>
                        <div class="form-group label-floating">
                            <label>Nghỉ từ ngày</label>
                            <input type="date" class="form-control timepicker" name="strat_time_off" />
                        </div>
                        <div class="form-group label-floating">
                            <label>Đến hết ngày ngày</label>
                            <input type="date" class="form-control datepicker" name="end_time_off" />
                        </div>
                        <button type="submit" class="btn btn-fill btn-primary">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
