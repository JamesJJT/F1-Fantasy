@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Value</th>
                        <th scope="col">Points</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                        <tr scope="row">
                            {{-- <td><a href="{{route('adminSpecificUser', [$team->id])}}">{{$user->id}}</a></td> --}}
                            <td><a href="{{route('showSpecificTeam', [$team->id])}}">{{$team->id}}</a></td>
                            <td>{{$team->user_id}}</td>
                            <td>{{$team->value}}</td>
                            <td>{{$team->points}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection