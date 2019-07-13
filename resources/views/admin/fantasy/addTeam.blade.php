@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('adminDashboard')}}">Admin Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('adminFantasyTeams')}}">Fantasy Teams</a></li>
                <li class="breadcrumb-item active">Add A New Team</li>
            </ol>
        </nav>
        @if ($message = Session::get('message'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger">
                        @foreach ($message as $message)
                            {{ $message }}
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
        <form method="POST" action="{{route('adminFantasyTeamAdd')}}" >
            @csrf
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Points</label>
              <input type="text" name="points" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                    <label for="">Value</label>
                    <input type="text" name="value" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection