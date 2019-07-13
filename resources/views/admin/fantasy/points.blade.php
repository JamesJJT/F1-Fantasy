@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Update Points</h1>
        @include('partials/errors')
            <div class="row">
                <div class="col-md-12">
                    @isset($f1json)
                        <h3>Most recent race result: {{$f1json}}</h3>
                    @endisset
                </div>
                <div class="col-md-12">
                    <a href="{{route('adminFantasyPointsGetInfo')}}" class="btn btn-primary mb-2">Get the most recent race</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="btn btn-success mb-2">Update the Points</a>
                </div>
            </div>
    </div>
@endsection