@extends('layouts.app')



@section('content')
    <div class="site-wrap justify-content-center text-center">
        <div class="site-cover site-cover-sm same-height overlay single-page"
             style="background-image: url({{asset('images/img_2.jpg')}});">
            <div class="container">
                <div class="row same-height justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="post-entry text-center">
                            <h1 class="mb-4"><a href="#">{{$post->title}}</a></h1>
                            <div class="post-meta align-items-center text-center">
                                <figure class="author-figure mb-0 mr-3 d-inline-block"><img
                                        src="{{asset('images/person_1.jpg')}}" alt="Image" class="img-fluid"></figure>
                                <span class="d-inline-block mt-1">By {{$post->user->name}}</span>
                                <span>&nbsp;-&nbsp; {{$post->created_at}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="site-section">
            <div class="container">
                <div class="row blog-entries element-animate">
                    <div class="col-md-12 col-lg-8 main-content">
                        <div class="post-content-body">
                            <p>{{$post->body}}</p>

                        </div>
                        <div class="pt-5">
                            <p>Categories:
                                @forelse($post->categories as $category)
                                    <a href="{{route('categories.index',['category'=>$category->id])}}">{{$category->name}} </a>
                                @empty
                                    <span>Not found</span>
                                @endforelse
                            </p>
                        </div>
                    </div>
                </div>
        </section>


        <div class="site-section bg-lightx">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-5">
                        <div class="subscribe-1 ">
                            <h2>Subscribe to our newsletter</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error
                                illum a explicabo, ipsam nostrum.</p>
                            <form action="#" class="d-flex">
                                <input type="text" class="form-control" placeholder="Enter your email address">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
