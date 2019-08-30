@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>All Teams</h1>
            
        </div>
        <div class="row">
            <div class="text-muted">Ordered by Points</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                    @foreach($teams as $indexKey => $team)
                    <?php $indexKey = $indexKey+1;?>
                        @include('layouts.team-card')
                    @endforeach
            </div>
        </div>
    </div>
    <div class="pagination justify-content-center">
        {{ $teams->links() }}
    </div>
@endsection