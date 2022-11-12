@extends('layout.main')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h2>Upload Picture</h2>
            </div>
            <div class="card-body">
                @include('common.message')
                <form action="{{route('user.picture.upload')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="form-file" name="picture">

            </div>
            <div class="card-footer">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
