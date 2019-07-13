@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Admin Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('adminFantasyDrivers')}}">Fantasy Drivers</a></li>
                <li class="breadcrumb-item active">Driver: {{$driver->id}}</li>
            </ol>
        </nav>
        @include('/partials/errors')
        <div class="row">
            <h1>User ID: {{$driver->id}}</h1>
        </div>
        <form method="post" action="{{route('adminUpdateDriver', ['id' => $driver->id])}}" class="form-group">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="{{$driver->first_name}}">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{$driver->last_name}}">
            </div>
            <div class="form-group">
                <label>Team</label>
                <input type="text" name="team" class="form-control" value="{{$driver->team}}">
            </div>
            <div class="form-group">
                <label>Points</label>
                <input type="number" name="points" class="form-control" value="{{$driver->points}}">
            </div>
            <div class="form-group">
                <label>Points</label>
                <input type="number" name="value" class="form-control" value="{{$driver->value}}">
            </div>
            <div class="form-group">
                <p>Created at: {{$driver->created_at}}</p>
                <p>Updated at: {{$driver->updated_at}}</p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
        <form method="post" action="{{route('adminDriverDelete', ['id' => $driver->id])}}" class="form-group">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection