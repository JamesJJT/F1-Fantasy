@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Admin Dashboard</a></li>
                <li class="breadcrumb-item">Fantasy Drivers</li>
            </ol>
        </nav>
        <div class="row">
            @if ($message = Session::get('message'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="row">
            <a name="" id="" class="btn btn-primary" href="{{route('adminFantasyShowDriverAdd')}}" role="button">Add New Driver</a>
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
                        <td scope="row">{{$driver->id}}</td>
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