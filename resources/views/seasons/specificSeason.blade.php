@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-3">{{$date}} Season</h1>
        @foreach(array_chunk($f1json->MRData->RaceTable->Races,3) as $f1)
            <div class="row">
                @foreach($f1 as $f1race)
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <div class="card-header"><a href="{{$f1race->url}}">{{$f1race->raceName}}</a></div>
                            <div class="card-body">
                                <p>Round: {{$f1race->round}}</p>
                                <p>Circuit: {{$f1race->Circuit->circuitName}}</p>
                                <p>Date: {{$f1race->date}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection