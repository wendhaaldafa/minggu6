@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('USER DATA') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a href="/users/create" class="btn btn-primary">Add Data</a> <br><br>
                    <form action="{{ route('search_user') }}" method="post" >
                        <div class="form-group">
                            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="User Name">
                            @method('GET')
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Usernama</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $u)
                            <tr>
                                <td>{{ $u->username }}</td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->role }}</td>
                                <td>
                                    <form action="/users/{{$u->id}}" method="post">
                                        <a href="/users/{{$u->id}}/edit" class="btn btn-warning">Edit</a>
                                        <a href="/users/{{$u->id}}" class="btn btn-info">View</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection