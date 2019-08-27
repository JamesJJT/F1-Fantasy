@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.errors')
    <form method="POST" action="{{route('createTeam')}}">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="">Driver 1</label>
            <select name="driver_1_id" class="form-control" required>
                <option value="">--Please Select--</option>
                @foreach($drivers as $driver)
                    <option value="{{$driver->id}}">{{$driver->first_name}} {{$driver->last_name}} -- Value: {{$driver->value}}m</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Driver 2</label>
            <select name="driver_2_id" class="form-control" required>
                <option value="">--Please Select--</option>
                @foreach($drivers as $driver)
                    <option value="{{$driver->id}}">{{$driver->first_name}} {{$driver->last_name}} -- Value: {{$driver->value}}m</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Driver 3</label>
            <select name="driver_3_id" class="form-control" required>
                <option value="">--Please Select--</option>
                @foreach($drivers as $driver)
                    <option value="{{$driver->id}}">{{$driver->first_name}} {{$driver->last_name}} -- Value: {{$driver->value}}m</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Driver 4</label>
            <select name="driver_4_id" class="form-control" required>
                <option value="">--Please Select--</option>
                @foreach($drivers as $driver)
            <option value="{{$driver->id}}">{{$driver->first_name}} {{$driver->last_name}} -- Value: {{$driver->value}}m</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Driver 5</label>
            <select name="driver_5_id" class="form-control" required>
                <option value="">--Please Select--</option>
                @foreach($drivers as $driver)
                    <option value="{{$driver->id}}">{{$driver->first_name}} {{$driver->last_name}} -- Value: {{$driver->value}}m</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Team</label>
            <select name="team_1_id" class="form-control" required>
                <option value="">--Please Select--</option>
                @foreach($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
@endsection