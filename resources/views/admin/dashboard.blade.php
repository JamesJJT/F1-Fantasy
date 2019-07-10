@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">Number of users: {{$user}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
