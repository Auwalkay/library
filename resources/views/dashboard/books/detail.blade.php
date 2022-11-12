@extends('layout.main')

@section('content')

    <div class="row m-4 d-flex align-items-center justify-content-between">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ucwords($book->title)}}</h2>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td rowspan="8" style="padding: 6px">
                                <img src="{{asset('/cover_pages/'.$book->cover_page)}}" alt="" width="200px">
                            </td>
                                    <th>Book Title</th>
                                    <td>{{$book->title}}</td>
                        </tr>
                        <tr>
                            <th>ISBN</th>
                            <td>{{$book->isbn}}</td>
                        </tr>
                        <tr>
                            <th>Author(s)</th>
                            <td>{{$book->author}}</td>
                        </tr>
                        <tr>
                            <th>Published Date</th>
                            <td>{{$book->published_date}}</td>
                        </tr>
                        <tr>
                            <th>Publisher</th>
                            <td>{{$book->publisher}}</td>
                        </tr>
                        <tr>
                            <th>Revision Number</th>
                            <td>{{$book->revision_number}}</td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>{{$book->genre}}</td>
                        </tr>
                        <tr>
                            <th>Date Added</th>
                            <td>{{$book->date_added}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    @if (Auth::user()->user_type_id == 1)
                        <a href="{{route('user.book.edit',$book->id)}}" class="btn btn-primary">Edit</a>
                    @elseif(Auth::user()->user_type_id == 2)



                    @endif


                </div>
            </div>
            @if(Auth::user()->user_type_id==1)
            <div class="card mt-4">
                <div class="card-header">Checked Out Details</div>
                <div class="card-card">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Reader</th>
                            <th>Checked out Date</th>
                            <th>Expected Checked in Date</th>
                            <th>Days Remaining</th>
                        </tr>
                        @forelse ($book->readers as $key=> $reader)
                        <tr>
                            <td>{{++$key}}</td>
                            <td><a href="{{route('user.profile',$reader->user->id)}}">{{$reader->user->name}}</a> </td>
                            <td>{{$reader->checked_in}}</td>
                            <td>{{$reader->checked_out}}</td>

                            <td>
                                @if ($reader->status == 0)
                                    {{$reader->remainingDays()}}
                                @else
                                    Checked-in Already
                                @endif

                            </td>
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
