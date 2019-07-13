<div class="row">
    <div class="col-md-12">
        @if ($success = Session::get('success'))
            <div class="alert alert-success">
                {{$success}}
            </div>
        @endif
        @if ($warning = Session::get('warning'))
            <div class="alert alert-warning">
                {{$warning}}
            </div>
        @endif
        @if ($danger = Session::get('danger'))
            <div class="alert alert-danger">
                {{$danger}}
            </div>
        @endif
    </div>
</div>