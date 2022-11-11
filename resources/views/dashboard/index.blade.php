@extends('layout.main')

@section('content')
<div class="row m-4 d-flex align-items-center justify-content-between">
    <div class="col-md-12">
        @if (Auth::user()->user_type_id == 1)
            <div class="card">
                <div class="card-header">
                    <h2>Analysis</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-12">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Total Books</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{route('user.book.all')}}">{{count(App\Models\Book::all())}}</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Total Users</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{route('users.all')}}">{{count(App\Models\User::all())}}</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Checked Out Books</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{route('users.all')}}">{{count(App\Models\User::all())}}</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        @elseif(Auth::user()->user_type_id == 2)
        <div class="card">
            <div class="card-header">
                <h2>Analysis</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">All Books Checked</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">0</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Books to be Checked OUT</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#"></a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        @endif
    </div>
</div>
@endsection
