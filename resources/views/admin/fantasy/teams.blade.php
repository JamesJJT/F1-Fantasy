@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Admin Dashboard</a></li>
                <li class="breadcrumb-item">Fantasy Teams</li>
            </ol>
        </nav>
        <h1>Teams</h1>
        @include('partials/errors')
        <div class="row">
            <div class="col-md-12 mb-2">
                <a name="" id="" class="btn btn-primary float-right" href="{{route('adminFantasyShowTeamAdd')}}" role="button">Add New Team</a>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Points</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                    <tr>
                        <td scope="row"><a href="{{route('adminSpecificTeam', [$team->id])}}">{{$team->id}}</a></td>
                        <td>{{$team->name}}</td>
                        <td>{{$team->points}}</td>
                        <td>{{$team->value}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection