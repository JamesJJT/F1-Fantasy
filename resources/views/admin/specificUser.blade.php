@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>User ID: {{$user->id}}</h1>
        </div>
        <form action="POST" action="{{route('adminUpdateUser', ['id'=>$user->id])}}" class="form-group">
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
                <button type="submit" class="btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection