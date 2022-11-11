<div>

    <div class="row m-4 d-flex align-items-center justify-content-between">
        @include('common.message')
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Search
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                            <input type="text" class="form-control" wire:model="title" placeholder="Book Title">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" wire:model='isbn' placeholder="ISBN">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" wire:model='publisher' placeholder="Publisher">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" placeholder="Book Title" wire:model='dateAdded'>
                        </div>
                        </div>



                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" wire:click='search()'>Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    List of All Books
                </div>
                <div class="card-body">
                    @if ($books != null)
                        <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Title</th>
                            <th>ISBN</th>
                            <th>Publisher</th>

                            <th>Authors</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($books as $key=>$book)
                        <tr>

                                <td>{{++$key}}</td>
                                <td> <a href="{{route('user.book.details',$book->id)}}"> {{ucwords($book->title)}} </a></td>
                                <td>{{ucwords($book->isbn)}}</td>
                                <td>{{ucwords($book->publisher)}}</td>
                                <td>{{ucwords($book->author)}}</td>


                            <td>

                                @if (in_array($book->id,$checkedBooks->toArray()) )
                                    Checked
                                @else
                                    <button class="btn btn-primary" wire:click="checkOut({{$book->id}})">Check out  </button>
                                @endif


                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p class="alert alert-danger">Record Not Found</p>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
