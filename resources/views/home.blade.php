@extends('app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li class="active">Home</li>
    </ol>

    <div class="page-header">
        <h1>Latest <small>Posts</small></h1>
    </div>

    <div class="row">
        @forelse($posts as $post)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    @if($post->images->count() > 0)
                        <img class="post-thumbnail" alt="100%x200" src="{{ $post->images->first()->image}}">
                    @endIf
                    <div class="caption">
                        <small>{{ $post->created_at }}</small>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->description }}</p>
                        <p><a href="#{{ $post->id }}" class="btn btn-default" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
        @empty
            <p>No posts yet!</p>
        @endforelse

    </div>

</div>
@endsection