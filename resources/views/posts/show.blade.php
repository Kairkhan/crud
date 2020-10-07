@extends('layouts.app')

@section ('head')
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700|Playfair+Display:400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('custom_css/magnific-popup.css')}}">
    {{--    <link rel="stylesheet" href="custom_css/jquery-ui.css">--}}
    {{--    <link rel="stylesheet" href="custom_css/owl.carousel.min.css">--}}
    {{--    <link rel="stylesheet" href="custom_css/owl.theme.default.min.css">--}}
    {{--    <link rel="stylesheet" href="custom_css/bootstrap-datepicker.css">--}}
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('custom_css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('custom_css/style.css')}}">
@endsection


@section('content')
    <div class="site-wrap">
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

        <section class="site-section py-lg">
            <div class="container">

                <div class="row blog-entries element-animate">

                    <div class="col-md-12 col-lg-8 main-content">

                        <div class="post-content-body">
                            <p>{{$post->body}}</p>
                            @if($post->user->id === @auth()->user()->id)
                                <a href="{{route('posts.edit',['post'=>$post->id])}}">
                                    <button class="btn btn-md btn-primary" style="border-radius: 5px;">Edit</button>
                                </a>
                                <a href="{{route('posts.delete',['post'=>$post->id])}}">
                                    <button class="btn btn-md btn-danger" style="border-radius: 5px;">Delete</button>
                                </a>
                            @endif
                        </div>


                        <div class="pt-5">
                            <p>Categories:
                                @foreach($post->categories as $category)
                                    @if($category)
                                        <a href="{{route('categories.index',['category'=>$category->id])}}">{{$category->name}} </a>
                                    @endif
                                @endforeach
                            </p>
                        </div>


                        <div class="pt-5">
                            <h3 class="mb-5">6 Comments</h3>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{asset('images/person_1.jpg')}}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem
                                            laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe
                                            enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                            nihil?</p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>
                                </li>
                            </ul>
                            <!-- END comment-list -->

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Leave a comment</h3>
                                <form action="#" class="p-5 bg-light">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea name="" id="message" cols="30" rows="10"
                                                  class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- END main-content -->

                    <div class="col-md-12 col-lg-4 sidebar">
                        <div class="sidebar-box search-form-wrap">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon fa fa-search"></span>
                                    <input type="text" class="form-control" id="s"
                                           placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <div class="bio text-center">
                                <img src="{{asset('images/person_2.jpg')}}" alt="Image Placeholder"
                                     class="img-fluid mb-5">
                                <div class="bio-body">
                                    <h2>{{$post->user->name}}</h2>
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate
                                        nulla quo veniam fuga sit molestias minus.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm rounded px-4 py-2">Read my bio</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <h3 class="heading">Popular Posts</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('images/img_1.jpg')}}" alt="Image placeholder"
                                                 class="mr-4">
                                            <div class="text">
                                                <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- END sidebar-box -->

                        <div class="sidebar-box">
                            <h3 class="heading">Categories</h3>
                            <ul class="categories">
                                <li><a href="#">Food <span>(12)</span></a></li>
                            </ul>
                        </div>
                        <!-- END sidebar-box -->

                        <div class="sidebar-box">
                            <h3 class="heading">Tags</h3>
                            <ul class="tags">
                                <li><a href="#">Travel</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar -->

                </div>
            </div>
        </section>

        <div class="site-section bg-light">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-12">
                        <h2>More Related Posts</h2>
                    </div>
                </div>

                <div class="row align-items-stretch retro-layout">
                    <div class="col-md-4">
                        <a href="single.html" class="hentry img-2 v-height mb30 gradient"
                           style="background-image: url({{asset('images/img_1.jpg')}});">
                            <span class="post-category text-white bg-success">Nature</span>
                            <div class="text text-sm">
                                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                                <span>February 12, 2019</span>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>


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


        <div class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3 class="footer-heading mb-4">About Us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit magnam
                            deleniti quasi saepe, consequatur atque sequi delectus dolore veritatis obcaecati quae,
                            repellat eveniet omnis, voluptatem in. Soluta, eligendi, architecto.</p>
                    </div>
                    <div class="col-md-3 ml-auto">
                        <!-- <h3 class="footer-heading mb-4">Navigation</h3> -->
                        <ul class="list-unstyled float-left mr-5">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Subscribes</a></li>
                        </ul>
                        <ul class="list-unstyled float-left">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Nature</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">


                        <div>
                            <h3 class="footer-heading mb-4">Connect With Us</h3>
                            <p>
                                <a href="#"><span class="icon-facebook pt-2 pr-2 pb-2 pl-0"></span></a>
                                <a href="#"><span class="icon-twitter p-2"></span></a>
                                <a href="#"><span class="icon-instagram p-2"></span></a>
                                <a href="#"><span class="icon-rss p-2"></span></a>
                                <a href="#"><span class="icon-envelope p-2"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="icon-heart text-danger"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

@endsection
