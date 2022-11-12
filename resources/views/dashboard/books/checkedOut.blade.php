@extends('layout.main')

@section('content')
    <div class="row m-4 d-flex align-items-center justify-content-between">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    List of All Checkout Books
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>ISBN</th>
                            <th>Publisher</th>
                            <th>Number of Check Out</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($books as $key=>$book)
                        <tr>
                            <td>{{++$key}}</td>
                            <td><a href="{{route('user.book.details',$book->book_id)}}">{{ucwords($book->book->title)}}</a> </td>
                            <td>{{ucwords($book->book->isbn)}}</td>
                            <td>{{ucwords($book->book->publisher)}}</td>
                            <td><a href="{{route('user.profile',$book->user_id)}}">{{ucwords($book->user->name)}}</a> </td>
                            <td>
                                <a href="{{route('user.book.details',$book->id)}}" class="btn btn-primary">View  </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
