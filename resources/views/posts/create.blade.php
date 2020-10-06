@extends('layouts.app')


@section('content')
    <div class="container">
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter post's title ...">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Body</label>
                <textarea class="form-control" name="body" rows="3" placeholder="Enter post's body ..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
