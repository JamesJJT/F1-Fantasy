@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Seasons</h1>
        @foreach(array_chunk(array_reverse($f1json->MRData->SeasonTable->Seasons),6) as $year)
            <div class="row mb-2">
                @foreach($year as $f1season)
                    <div class="col-md-2">
                        <a href="{{route('specificSeason', [$f1season->season])}}" class="list-group-item text-center">{{$f1season->season}}</a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection