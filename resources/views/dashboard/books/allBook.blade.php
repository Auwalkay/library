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
                            <th>Number of Check Out</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($books as $key=>$book)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{ucwords($book->title)}}</td>
                            <td>{{ucwords($book->isbn)}}</td>
                            <td>{{ucwords($book->publisher)}}</td>
                            <td>{{ucwords(count($book->readers))}}</td>
                            <td>
                                <a href="{{route('user.book.details',$book->id)}}" class="btn btn-primary">View  </a>
                                <a href="{{route('user.book.edit',$book->id)}}" class="btn btn-secondary">Edit  </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
