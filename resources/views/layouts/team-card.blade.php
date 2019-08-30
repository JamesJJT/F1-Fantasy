<div class="row team-card bg-white m-4 rounded ">
    <div class="col-md-2 m-auto border-right text-center">
        <span style="font-size: 3em;">
            <a href="{{route('showSpecificTeam', [$team->id])}}" class="text-decoration-none"><i class="fa fa-hashtag"></i><span class="font-weight-bold">{{$indexKey}}</span></a>
        </span>
    </div>
    <div class="col-md-10 align-center text-center text-muted">
        <div class="row">
            <div class="col-md-4">
                <p>User ID: {{$team->user_id}}</p>
            </div>
            <div class="col-md-4">
                <p>Team Value: {{$team->value}}</p>
            </div>
            <div class="col-md-4">
                <p>Points: {{$team->points}}</p>
            </div>
        </div>
    </div>
</div>