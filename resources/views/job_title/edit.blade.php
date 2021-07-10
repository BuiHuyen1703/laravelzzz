@extends('dashboard')
@section('huyen')
    <h1>Sửa thông tin job</h1>

    <form action="{{ route('jobTitle.update', $job->id_jobTitle) }}" method="post">
        @csrf
        @method("PUT")
        tên <input type="text" value="{{ $job->name_jobTitle }}" name="nameJob"><br>
        <button>Sửa</button>
    </form>
@endsection
