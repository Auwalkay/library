@extends('layout.main')

@section('content')

<div class="row m-4 d-flex align-items-center justify-content-between">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                List of All Users
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>User Type</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($users as $key => $user)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{ucwords($user->name)}}</td>
                        <td>{{ucwords($user->type())}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phoneNumber}}</td>
                        <td><a href="{{route('user.profile',$user->id)}}">View</a></td>
                    </tr>
                    @empty
                        <p class="alert alert-warning">
                            No Users yet
                        </p>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
