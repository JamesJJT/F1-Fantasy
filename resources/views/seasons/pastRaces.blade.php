@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($f1json->MRData->SeasonTable->Seasons as $year)
            <a href="{{route('specificSeason', [$year->season])}}" class="list-group-item">{{$year->season}}</a>
        @endforeach
    </div>

@endsection