@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Admin Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('adminFantasyTeams')}}">Fantasy Teams</a></li>
                <li class="breadcrumb-item active">Team: {{$team->id}}</li>
            </ol>
        </nav>
        @include('partials.errors')
        <div class="row">
            <h1>Team ID: {{$team->id}}</h1>
        </div>
        <form method="post" action="{{route('adminUpdateTeam', ['id' => $team->id])}}" class="form-group">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{$team->name}}">
            </div>
            <div class="form-group">
                <label>Points</label>
                <input type="number" name="points" class="form-control" value="{{$team->points}}">
            </div>
            <div class="form-group">
                <label>Value</label>
                <input type="number" name="value" class="form-control" value="{{$team->value}}">
            </div>
            <div class="form-group">
                <p>Created at: {{$team->created_at}}</p>
                <p>Updated at: {{$team->updated_at}}</p>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </form>
        <form method="post" action="{{route('adminTeamDelete', ['id' => $team->id])}}" class="form-group">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection