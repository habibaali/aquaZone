@extends('layouts.app')

@section('content')
<div class="card-body">
    @if(Session::has('post_added'))
        <div class="alert alert-success" role="alert">
        {{ Session::get('post_added') }}
        </div>
    @endif
    <form method="post" action="{{ route('insert') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Details</label>
            <textarea  class="form-control" name="details" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Photo</label>
            <input type="file" name="photo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
