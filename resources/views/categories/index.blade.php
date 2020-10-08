@extends('layouts.app')



@section('content')
    <div class="container mt-5 min-vh-100">
        <div class="row">
            @forelse($posts as $post)
                <div class="col-lg-4 mb-4">
                    <div class="entry2">
                        <a href="{{route('posts.show',['post'=>$post->id])}}"><img src="{{asset('images/img_1.jpg')}}"
                                                                                   alt="Image"
                                                                                   class="img-fluid rounded"></a>
                        <div class="excerpt">
                            <h2><a href="{{route('posts.show',['post'=>$post->id])}}">{{$post->title}}</a></h2>
                            <div class="post-meta align-items-center text-left clearfix">
                                <span class="d-inline-block mt-1">By <a href="#">{{$post->user->name}}</a></span>
                                <span>&nbsp;-&nbsp; {{$post->created_at}}</span>
                            </div>
                            <p>{{$post->body}}</p>
                            <p><a href="{{route('posts.show',['post'=>$post->id])}}">Read More</a></p>
                        </div>
                    </div>
                </div>
            @empty
                <h1>No posts</h1>
            @endforelse
        </div>
    </div>
@endsection
