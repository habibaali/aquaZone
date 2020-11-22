@extends('layouts.app')

@section('content')
<div class="table">
    @if(Session::has('photo_delete'))
        <div class="alert alert-success" role="alert">
        {{ Session::get('photo_delete') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $post->title }}</td>
            <td> <img src="{{asset('public/Images')}}/{{$post->photo}}" alt="" style="max-width: 100px;"> </td>
            <td class="d-flex justify-content-start">
                <a href="{{ url('/post/view', $post->id) }}" class="btn btn-info m-1">View</a>
                <a href="{{ url('post/edit', $post->id) }}" class="btn btn-warning m-1">Edit</a>
                <a href="{{ url('post/delete', $post->id) }}" class="btn btn-danger m-1">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection