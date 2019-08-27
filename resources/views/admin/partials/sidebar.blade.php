<style>
    .td-none{
        text-decoration: none;
    }
</style>
<div class="col-md-2 border-right">
    <div class="container py-4">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center bg-primary text-white">
                    Users
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="td-none" href="{{route('adminUsers')}}">All Users</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Admins
            </li>
        </ul>
        <hr>
        <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-primary text-white">
                        Fasntasy
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('adminFantasyDrivers')}}">Fantasy Drivers</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('adminFantasyTeams')}}">Fantasy Teams</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="{{route('adminFantasyPoints')}}">Fantasy Points Update</a>
                </li>
            </ul>
    </div>
</div>