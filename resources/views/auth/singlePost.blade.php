@extends('layouts.app')

@section('content')
<div class="table">
    <div class="media">
        <div class="media-body">
            <h2 class="mt-0 mb-1">{{ $post->title }}</h2>
            <p>{{ $post->details }}</p>
        </div>
    </div>
    <img src="{{asset('public/images')}}/{{$post->photo}}">
</div>
@endsection
