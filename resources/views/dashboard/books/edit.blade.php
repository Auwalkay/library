@extends('layout.main')

@section('content')

<div class="row m-4 d-flex align-items-center justify-content-between">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Add New Book
            </div>
            <div class="card-body">
                @include('common.message')
                <form method="POST" action="{{route('user.book.update',$book->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">

                                <input type="text" class="form-control" value="{{$book->title}}" name="title" id="bookName" placeholder="Book Title">
                                <label for="bookName">Book Title</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">

                                <input type="text" class="form-control" value="{{ $book->isbn }}" name="isbn" id="isbn" placeholder="ISBN">
                                <label for="isbn">ISBN</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">

                                <input type="text" class="form-control" value="{{$book->revision_number}}" name="revisionNumber" id="revisionNumber" placeholder="Revision Number">
                                <label for="revisionNumber">Revision Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">

                                <input type="date" name="publishedDate" value="{{$book->published_date}}" class="form-control" id="published_date" placeholder="Published Date">
                                <label for="published_date">Published Date</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">

                                <input type="text" name="publisher" class="form-control" value="{{$book->publisher}}" id="publisher" placeholder="Publisher">
                                <label for="publisher">Publisher</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">

                                <input type="text" name="author" value="{{$book->author}}" class="form-control" id="author" placeholder="Author">
                                <label for="author">Author </label>
                                <span class="small font-danger">Use comma for more than 1 Author</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input type="text" name="genre" value="{{$book->genre}}" class="form-control" id="genre" placeholder="Genre">
                                <label for="genre">Genre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="coverPage">Cover Page</label>
                            <div class="form-floating mb-3 mb-md-0">

                                <input type="file" name="coverPage" class="form-file" id="coverPage">

                            </div>
                        </div>
                    </div>


            </div>
            <div class="card-footer">
                <input class="btn btn-primary" type="submit" value="Save">
            </form>
            </div>
        </div>
    </div>
</div>


@endsection
