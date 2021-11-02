@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('STUDENT DATA ')  }} {{ $student->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <img width="150px" src="{{asset('storage/'.$student->photo)}}">
                    <form>
                        <input type="hidden" name="id" value="{{$student->id}}"></br>
                        <div class="form-group">
                            <label for="nim">ID</label>
                            <input type="text" class="form-control" required="required" name="id" value="{{$student->id}}" readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" required="required" name="nim" value="{{$student->nim}}" readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" required="required" name="name" value="{{$student->name}}" readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" class="form-control" required="required" name="class" value="{{ $student->kelas->class_name }}" readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input type="text" class="form-control" required="required" name="department" value="{{$student->department}}"readonly></br>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" required="required" name="phone_number" value="{{$student->phone_number}}"readonly></br>
                        </div>
                        <a href='/students' class="btn btn-dark">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection