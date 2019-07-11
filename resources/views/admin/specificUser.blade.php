@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Admin Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('adminUsers')}}">Users</a></li>
                <li class="breadcrumb-item active">User: {{$user->id}}</li>
            </ol>
        </nav>
        @if ($message = Session::get('success'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <h1>User ID: {{$user->id}}</h1>
        </div>
        <form method="post" action="{{route('adminUpdateUser', ['id' => $user->id])}}" class="form-group">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}">
            </div>
            <div class="form-group">
                <label>Admin</label>
                <input type="text" name="admin" class="form-control" value="{{$user->admin}}">
            </div>
            <div class="form-group">
                <p>Created at: {{$user->created_at}}</p>
                <p>Updated at: {{$user->updated_at}}</p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
        <form method="post" action="{{route('adminUserDelete', ['id' => $user->id])}}" class="form-group">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection