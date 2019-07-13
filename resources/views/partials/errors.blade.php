@if ($message = Session::get('message'))
    <div class="row">
        <div class="col-md-12">
            @if(isset($message->danger))
                <div class="alert alert-danger">
                        @foreach ($message as $message)
                            {{ $message }}
                        @endforeach
                </div>
            @endif
            @if($message = isset($message->success))
                <div class="alert alert-success">
                        @foreach ($message as $message)
                            {{ $message }}
                        @endforeach
                </div>
            @endif
            @if(isset($message->warning))
                <div class="alert alert-warning">
                        @foreach ($message as $message)
                            {{ $message }}
                        @endforeach
                </div>
            @endif
        </div>
    </div>
@endif