@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>All Teams</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <?php $i = 0?>
                    @foreach($teams as $team)
                        <?php $i++;?>
                        @include('layouts.team-card')
                    @endforeach
            </div>
        </div>
    </div>
    <div class="pagination justify-content-center">
        {{ $teams->links() }}
    </div>
@endsection