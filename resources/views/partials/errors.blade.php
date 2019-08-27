<div class="row">
    <div class="col-md-12">
        @if ($success = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                {{$success}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($warning = Session::get('warning'))
            <div class="alert alert-warning alert-dismissible">
                {{$warning}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        @endif
        @if ($danger = Session::get('danger'))
            <div class="alert alert-danger alert-dismissible">
                {{$danger}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        @endif
    </div>
</div>