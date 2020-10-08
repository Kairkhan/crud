@extends('layouts.app')



@section('content')
    <div class="container min-vh-100 mt-5">
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Edit post's title ..." value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Body</label>
                <textarea class="form-control" name="body" rows="3" placeholder="Edit post's body ..."> {{$post->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
