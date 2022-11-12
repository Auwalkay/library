@extends('layout.main')

@section('content')

<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
    <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-floating mb-3 mb-md-0">
                        @include('common.message')
                        <form method="post" action="{{route('user.store')}}">
                            @csrf
                        <input class="form-control" id="inputFirstName" type="text" name="fullName" placeholder="Enter your first name" />
                        <label for="inputFirstName">Fullname</label>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">

                        <label for="inputEmail">Active Email</label>
                        <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />




                </div>
                <div class="col-md-6">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="080XXXXXXX" name="phoneNumber">

                </div>
            </div>
            <div class="form-floating mb-3">

            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" />
                        <label for="inputPassword">Password</label>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3 mb-md-0">
                        <input class="form-control" id="inputPasswordConfirm" name="password_confirmation" type="password" placeholder="Confirm password" />
                        <label for="inputPasswordConfirm">Confirm Password</label>

                    </div>
                </div>
            </div>

            <div class="mt-4 mb-0">
                <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Create Account</button>
                </form>
                </div>
            </div>

    </div>
    <div class="card-footer text-center py-3">

    </div>
</div>

@endsection
