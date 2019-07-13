@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Update Points</h1>
        @include('partials/errors')
            <div class="row">
                    @isset($f1json)
                        <div class="col-md-12 bg-secondary rounded mb-2 text-white">
                            <h3>Most recent race result: {{$f1json->Races[0]->raceName}}</h3>
                            @foreach ($f1json->Races[0]->Results as $f1)
                                    <p>
                                        <div class="text-small">
                                            {{$f1->Driver->familyName}}     ->      {{$f1->Constructor->name}}
                                        </div>
                                    </p>
                            @endforeach
                        </div>
                    @endisset
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