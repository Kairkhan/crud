@extends('layouts.app')


@section('content')
    <div class="container mt-5 text-center">
        <div class="row m-auto w-75">
            @foreach($posts as $post)
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h1 class="display-5">{{$post->title}}</h1>
                        <p class="lead">{{$post->body}}</p>
                        <hr class="my-4">
                        <a href="{{route('posts.edit',['post'=>$post->id])}}">
                            <button class="btn btn-lg btn-primary" style="border-radius: 5px;">Edit</button>
                        </a>
                        <a href="{{route('posts.delete',['post'=>$post->id])}}">
                            <button class="btn btn-lg btn-danger" style="border-radius: 5px;">Delete</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
