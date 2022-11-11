@extends('layout.main')

@section('content')
    <div class="row m-4 d-flex align-items-center justify-content-between">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    List of All Books
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>ISBN</th>
                            <th>Publisher</th>
                            <th>Checked-out Date</th>
                            <th>Expected Check-in Date</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        @foreach ($userBooks as $key=>$book)
                        <tr>
                            <td>{{++$key}}</td>
                            <td><a href="{{route('user.book.details',$book->book_id)}}">{{ucwords($book->book->title)}}</a> </td>
                            <td>{{ucwords($book->book->isbn)}}</td>
                            <td>{{ucwords($book->book->publisher)}}</td>
                            <td>{{$book->checked_in}}</td>
                            <td>{{$book->checked_out}} </td>
                            <td>
                                {{$book->status == 0 ? "Checked-out":"Checked-in"}}
                            </td>
                            <td>
                                @if ($book->status ==0)
                                    <a href="" class="">Check In</a>
                                @else

                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
