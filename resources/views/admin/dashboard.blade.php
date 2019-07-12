@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('adminUsers')}}">Users</a>
                    </div>
                    <div class="card-body">Number of users: {{$user}}</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('adminFantasyDrivers')}}">Fantasy Drivers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
