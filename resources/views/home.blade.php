@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <p>Welcome: {{$user->name}}</p>
                    <p>{{$user->email}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header align-content-center align-content-end">
                    Fantasy Team
                </div>
                <div class="card-body">
                    {{--Replace this with the object that will detect if the user has a team already --}}
                    @if (!isset($fantasyvreatebutton))
                        <p>You have no current team, create one with the button below.</p>
                        <a class="btn btn-primary float ml-1 mt-1" href="#">Create a Team</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
