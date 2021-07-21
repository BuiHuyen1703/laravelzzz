@extends('dashboard')
@section('title','Cập nhật level')

@section('huyen')
    {{-- <h1>Sửa level</h1>
    <form action="{{ route('level.update', $level->id_level) }}" method="post">
        @csrf
        @method("PUT")
        Tên <input type="text" value="{{ $level->basic_salary }}" name="basic_salary"><br>
        <button>Sửa</button>
    </form> --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">mail_outline</i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Sửa thông tin level</h3>
                    <form action="{{ route('level.update', $level->id_level) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="form-group label-floating">
                            <label class="control-label">Tiền lương cơ bản</label>
                            <input type="text" class="form-control" value="{{ $level->basic_salary }}" name="basic_salary">
                        </div>
                        <button type="submit" class="btn btn-fill btn-rose">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
