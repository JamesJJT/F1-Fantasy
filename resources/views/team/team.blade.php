@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.errors')
    <div class="row">
        <div class="col-md">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1>Your Team</h1>
                </div>
                <div>
                    <a href="{{route('showCreateTeam')}}"><button class="btn btn-primary">View All Teams</button></a>
                </div>
            </div>
            @if (!$userteam)
                <h3>You have no team created.</h3>
                <a href="{{route('showCreateTeam')}}"><button class="btn btn-primary">Create a Team</button></a>
            @endif
        </div>
    </div>
    
    @if ($userteam)
        <div class="row">
            <div class="col-md">
                <h3>Drivers</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md pb-2">
                <div class="card text-left">
                  <div class="card-body">
                    <h4 class="card-title">{{$driver1->first_name}} {{$driver1->last_name}}</h4>
                    <p class="card-text">Value: {{$driver1->value}}</p>
                    <p class="card-text">Points: {{$driver1->points}}</p>
                  </div>
                </div>
            </div>
            <div class="col-md pb-2">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title">{{$driver2->first_name}} {{$driver2->last_name}}</h4>
                        <p class="card-text">Value: {{$driver2->value}}</p>
                        <p class="card-text">Points: {{$driver2->points}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md pb-2">
                <div class="card text-left">
                  <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md pb-2">
                <div class="card text-left">
                    <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                    </div>
                </div>
            </div>
            <div class="col-md pb-2">
                <div class="card text-left">
                    <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                    </div>
                </div>
            </div>
            <div class="col-md pb-2">
                <div class="card text-left">
                    <div class="card-body">
                    <h4 class="card-title">Team Stats</h4>
                    <p class="card-text">Total Value: {{$value}}</p>
                    <p class="card-text">Total Points: {{$points}}</p>
                    </div>
                </div>
            </div>
        </div>
        <h3>Team</h3>
        <div class="row">
            <div class="col-md">
                <div class="card text-left">
                  <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Body</p>
                  </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection