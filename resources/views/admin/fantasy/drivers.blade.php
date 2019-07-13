@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Admin Dashboard</a></li>
                <li class="breadcrumb-item">Fantasy Drivers</li>
            </ol>
        </nav>
        <h1>Drivers</h1>
        @if ($message = Session::get('message'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12 mb-2">
                <a name="" id="" class="btn btn-primary float-right" href="{{route('adminFantasyShowDriverAdd')}}" role="button">Add New Driver</a>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Team</th>
                        <th>Points</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($drivers as $driver)
                    <tr>
                        <td scope="row"><a href="{{route('adminSpecificDriver', [$driver->id])}}">{{$driver->id}}</a></td>
                        <td>{{$driver->first_name}}</td>
                        <td>{{$driver->last_name}}</td>
                        <td>{{$driver->team}}</td>
                        <td>{{$driver->points}}</td>
                        <td>{{$driver->value}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection