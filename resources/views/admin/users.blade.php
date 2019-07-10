@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Users</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Admin</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr scope="row">
                            <td><a href="{{route('adminSpecificUser', [$user->id])}}">{{$user->id}}</a></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->admin}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="pagination justify-content-center">
        {{ $users->links() }}
    </div>
@endsection