@extends('layout.main')

@section('content')

    <div class="row m-4 d-flex align-items-center justify-content-between">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ucwords($user->name)}}</h2>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td rowspan="3" style="padding: 6px">
                                <img src="{{asset('/passports/'.$user->passport)}}" alt="" width="200px">
                            </td>
                                    <th>Name</th>
                                    <td>{{ucwords($user->name)}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{strtolower($user->email)}}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{$user->phoneNumber}}</td>
                        </tr>

                    </table>
                </div>
                <div class="card-footer">
                    {{-- @if (Auth::user()->user_type_id == 1)
                        <a href="{{route('user.book.edit',$book->id)}}" class="btn btn-primary">Edit</a>
                    @elseif(Auth::user()->user_type_id == 2)

                    @endif --}}


                </div>
            </div>
            @if(Auth::user()->user_type_id==1)
            <div class="card mt-4">
                <div class="card-header">Checked Out Books</div>
                <div class="card-card">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Reader</th>
                            <th>Checked out Date</th>
                            <th>Expected Checked in Date</th>
                            <th>Days Remaining</th>
                        </tr>
                        @forelse ($user->books as $key=> $book)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$book->book->title}}</td>
                            <td>{{$book->checked_in}}</td>
                            <td>{{$book->checked_out}}</td>
                            <td>{{$book->remainingDays()}}</td>
                        </tr>
                        @empty

                        @endforelse
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
