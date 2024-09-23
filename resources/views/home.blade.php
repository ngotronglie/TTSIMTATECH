@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="post-area pd-top-75 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Trending News</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="trending-post">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="{{ asset('template/assets/img/post/5.png') }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">The FAA will test drone </a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="{{ asset('template/assets/img/post/6.png' ) }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Flight schedule and quarantine</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="{{ asset('template/assets/img/post/7.png' ) }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Indore bags cleanest city</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="trending-post">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="{{ asset('template/assets/img/post/5.png' ) }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">The FAA will test drone </a></h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="{{ asset('template/assets/img/post/6.png' ) }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Flight schedule and quarantine</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="{{ asset('template/assets/img/post/7.png' ) }}" alt="img">
                                    </div>
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
                                        </div>
                                        <h6 class="title"><a href="blog-details.html">Indore bags cleanest city</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Latest News</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/1.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Himachal Pradesh rules in
                                                    order to allow tourists </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/2.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Online registration, booking
                                                    for Vaishno Devi </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/3.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Detecting technologies in
                                                    airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/4.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">The FAA will drone detect-ing
                                                    in airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/5.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Thailand makes it mand-atory
                                                    for tourists to stay</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/1.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Himachal Pradesh rules in
                                                    order to allow tourists </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/2.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Online registration, booking
                                                    for Vaishno Devi </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/3.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Detecting technologies in
                                                    airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/4.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">The FAA will drone detect-ing
                                                    in airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/5.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Thailand makes it mand-atory
                                                    for tourists to stay</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">What’s new</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/8.png' ) }}" alt="img">
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-4 pt-1">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="cat-tech.html">Tech</a></li>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="blog-details.html">Uttarakhand’s Hemkund Sahib yatra to
                                            start from September 4</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/8.png' ) }}" alt="img">
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-4 pt-1">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="cat-tech.html">Tech</a></li>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                        </ul>
                                    </div>
                                    <h6 class="title"><a href="blog-details.html">Uttarakhand’s Hemkund Sahib yatra to
                                            start from September 4</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="section-title">
                        <h6 class="title">Join With Us</h6>
                    </div>
                    <div class="social-area-list mb-4">
                        <ul>
                            <li><a class="facebook" href="#"><i
                                        class="fa fa-facebook social-icon"></i><span>12,300</span><span>Like</span> <i
                                        class="fa fa-plus"></i></a></li>
                            <li><a class="twitter" href="#"><i
                                        class="fa fa-twitter social-icon"></i><span>12,600</span><span>Followers</span>
                                    <i class="fa fa-plus"></i></a></li>
                            <li><a class="youtube" href="#"><i
                                        class="fa fa-youtube-play social-icon"></i><span>1,300</span><span>Subscribers</span>
                                    <i class="fa fa-plus"></i></a></li>
                            <li><a class="instagram" href="#"><i
                                        class="fa fa-instagram social-icon"></i><span>52,400</span><span>Followers</span>
                                    <i class="fa fa-plus"></i></a></li>
                            <li><a class="google-plus" href="#"><i
                                        class="fa fa-google social-icon"></i><span>19,101</span><span>Subscribers</span>
                                    <i class="fa fa-plus"></i></a></li>
                        </ul>
                    </div>
                    <div class="add-area">
                        <a href="blog-details.html"><img class="w-100" src="{{ asset('template/assets/img/add/6.png' ) }}" alt="img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-sky pd-top-80 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay-bg">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/9.png' ) }}" alt="img">
                        </div>
                        <div class="details">
                            <div class="post-meta-single mb-3">
                                <ul>
                                    <li><a class="tag-base tag-blue" href="cat-fashion.html">fashion</a></li>
                                    <li>
                                        <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                                    </li>
                                </ul>
                            </div>
                            <h6 class="title"><a href="blog-details.html">A Comparison of the Sony FE 85mm f/1.4 GM and
                                    Sigma</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/10.png' ) }}" alt="img">
                            <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2023</p>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="blog-details.html">Rocket Lab will resume launches no sooner
                                    than</a></h6>
                        </div>
                    </div>
                    <div class="single-post-wrap">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/11.png' ) }}" alt="img">
                            <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2023</p>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="blog-details.html">P2P Exchanges in Africa Pivot: Nigeria and
                                    Kenya the</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/12.png' ) }}" alt="img">
                            <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2023</p>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="blog-details.html">Bitmex Restricts Ontario Residents as Mandated
                                    by</a></h6>
                        </div>
                    </div>
                    <div class="single-post-wrap">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/13.png' ) }}" alt="img">
                            <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2023</p>
                        </div>
                        <div class="details">
                            <h6 class="title"><a href="blog-details.html">The Bitcoin Network Now 7 Plants Worth of
                                    Power</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="trending-post style-box">
                        <div class="section-title">
                            <h6 class="title">Trending News</h6>
                        </div>
                        <div class="post-slider owl-carousel">
                            <div class="item">
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/1.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Important to rate more
                                                        liquidity</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/2.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Sounds like John got the
                                                        Josh</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/3.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Grayscale's and Bitcoin
                                                        Trusts</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/4.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Sounds like John got the
                                                        Josh</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap mb-0">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/5.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Grayscale's and Bitcoin
                                                        Trusts</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/1.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Important to rate more
                                                        liquidity</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/2.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Sounds like John got the
                                                        Josh</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/3.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Grayscale's and Bitcoin
                                                        Trusts</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/4.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Sounds like John got the
                                                        Josh</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post-list-wrap mb-0">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="{{ asset('template/assets/img/post/list/5.png' ) }}" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title"><a href="blog-details.html">Grayscale's and Bitcoin
                                                        Trusts</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pd-top-80 pd-bottom-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/15.png' ) }}" alt="img">
                            <a class="tag-base tag-purple" href="cat-tech.html">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">Why Are the Offspring of Older </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/16.png' ) }}" alt="img">
                            <a class="tag-base tag-green" href="cat-tech.html">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">People Who Eat a Late Dinner May</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/17.png' ) }}" alt="img">
                            <a class="tag-base tag-red" href="cat-tech.html">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">Kids eat more calories in </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/18.png' ) }}" alt="img">
                            <a class="tag-base tag-purple" href="cat-tech.html">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">The FAA will test drone </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/19.png' ) }}" alt="img">
                            <a class="tag-base tag-red" href="cat-tech.html">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">Lifting Weights Makes Your Nervous</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/20.png' ) }}" alt="img">
                            <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">New, Remote Weight-Loss Method </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/21.png' ) }}" alt="img">
                            <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">Social Connection Boosts Fitness App </a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/post/22.png' ) }}" alt="img">
                            <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">Internet For Things - New results </a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-area bg-black pd-top-80 pd-bottom-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tab-content" id="ex1-content">
                        <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel">
                            <div class="single-post-wrap style-overlay">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/23.png' ) }}" alt="img">
                                    <a href="https://www.youtube.com/watch?v=WwvNiN2_Jlk"
                                        class="video-play-btn play-btn-large play-btn-yellow mfp-iframe" tabindex="0"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single">
                                        <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                        <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                                    </div>
                                    <h6 class="title"><a href="blog-details.html">Scientists Discover the Switch That
                                            Makes Human</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel">
                            <div class="single-post-wrap style-overlay">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/video/01.png' ) }}" alt="img">
                                    <a href="https://www.youtube.com/watch?v=WwvNiN2_Jlk"
                                        class="video-play-btn play-btn-large play-btn-yellow mfp-iframe" tabindex="0"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single">
                                        <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                        <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                                    </div>
                                    <h6 class="title"><a href="blog-details.html">Here’s our take on the latest
                                            technology trends that will </a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel">
                            <div class="single-post-wrap style-overlay">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/23.png' ) }}" alt="img">
                                    <a href="https://www.youtube.com/watch?v=WwvNiN2_Jlk"
                                        class="video-play-btn play-btn-large play-btn-yellow mfp-iframe" tabindex="0"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single">
                                        <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                        <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                                    </div>
                                    <h6 class="title"><a href="blog-details.html">The gear and game plan you need to
                                            stay connected </a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel">
                            <div class="single-post-wrap style-overlay">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/video/1.png' ) }}" alt="img">
                                    <a href="https://www.youtube.com/watch?v=WwvNiN2_Jlk"
                                        class="video-play-btn play-btn-large play-btn-yellow mfp-iframe" tabindex="0"><i
                                            class="fa fa-play"></i></a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single">
                                        <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                        <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                                    </div>
                                    <h6 class="title"><a href="blog-details.html">Google Doodle celebrates modernist
                                            sculptor </a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nxp-tab-inner video-tab-inner text-center">
                        <ul class="nav nav-tabs" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="ex1-tab-1" data-toggle="pill" href="#ex1-tabs-1"
                                    role="tab" aria-selected="true">
                                    <div class="single-post-list-wrap style-white text-left">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ asset('template/assets/img/post/list/9.png' ) }}" alt="img">
                                                <div class="play-btn-small play-btn-gray"><i class="fa fa-play"></i>
                                                </div>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li>
                                                                <div class="tag-base tag-blue">Tech</div>
                                                            </li>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title mt-2">Here’s our take on the latest technology
                                                        trends that will </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-2" data-toggle="pill" href="#ex1-tabs-2" role="tab"
                                    aria-selected="false">
                                    <div class="single-post-list-wrap style-white text-left">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ asset('template/assets/img/post/list/10.png' ) }}" alt="img">
                                                <div class="play-btn-small play-btn-gray"><i class="fa fa-play"></i>
                                                </div>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li>
                                                                <div class="tag-base tag-blue">Tech</div>
                                                            </li>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title mt-2">The gear and game plan you need to stay
                                                        connected </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-3" data-toggle="pill" href="#ex1-tabs-3" role="tab"
                                    aria-selected="false">
                                    <div class="single-post-list-wrap style-white text-left">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ asset('template/assets/img/post/list/11.png' ) }}" alt="img">
                                                <div class="play-btn-small play-btn-gray"><i class="fa fa-play"></i>
                                                </div>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li>
                                                                <div class="tag-base tag-blue">Tech</div>
                                                            </li>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title mt-2">Google Doodle celebrates modernist sculptor
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-4" data-toggle="pill" href="#ex1-tabs-4" role="tab"
                                    aria-selected="false">
                                    <div class="single-post-list-wrap style-white text-left">
                                        <div class="media">
                                            <div class="media-left">
                                                <img src="{{ asset('template/assets/img/post/list/12.png' ) }}" alt="img">
                                                <div class="play-btn-small play-btn-gray"><i class="fa fa-play"></i>
                                                </div>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li>
                                                                <div class="tag-base tag-blue">Tech</div>
                                                            </li>
                                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title mt-2">Ford recalls 50,000 EV charging cables over
                                                        fire concerns</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="add-area bg-after-sky mg-top--100">
        <div class="container">
            <a href="#"><img src="{{ asset('template/assets/img/add/2.png' ) }}" alt="img"></a>
        </div>
    </div>

    <div class="post-area bg-sky pd-top-80 pd-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-4">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <img src="{{ asset('template/assets/img/video/7.png' ) }}" alt="img">
                            <a href="https://www.youtube.com/watch?v=WwvNiN2_Jlk"
                                class="video-play-btn play-btn-large play-btn-yellow mfp-iframe" tabindex="0"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single">
                                <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                            </div>
                            <h6 class="title"><a href="blog-details.html">Scientists Discover the Switch That Makes
                                    Human</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1">
                    <div class="section-title">
                        <h6 class="title">Automobile News</h6>
                    </div>
                    <div class="post-slider owl-carousel">
                        <div class="item">
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/1.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Himachal Pradesh rules in
                                                    order to allow tourists </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/2.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Online registration, booking
                                                    for Vaishno Devi </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/3.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Detecting technologies in
                                                    airports this year</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/4.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">The FAA will drone detect-ing
                                                    in airports this</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/1.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Himachal Pradesh rules in
                                                    order to allow tourists </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/2.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Online registration, booking
                                                    for Vaishno Devi </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/3.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">Detecting technologies in
                                                    airports this</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="{{ asset('template/assets/img/post/list/4.png' ) }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a href="blog-details.html">The FAA will drone detect-ing
                                                    in airports this</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-12">
                    <form class="single-newsletter-inner bg-yellow text-center">
                        <h5>Newsletter</h5>
                        <p>Stay Updated on all that's new add noteworthy</p>
                        <div class="single-input-inner">
                            <input type="text" placeholder="Enter Your Name">
                        </div>
                        <div class="single-input-inner">
                            <input type="text" placeholder="Enter Your Email">
                        </div>
                        <a class="btn btn-base w-100" href="#">Subscribe Now</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="tranding-area pd-top-75 pd-bottom-50">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-3 mb-2 mb-md-0">
                        <h6 class="title">Trending News</h6>
                    </div>
                    <div class="col-md-9">
                        <div class="nxp-tab-inner nxp-tab-post text-md-right">
                            <ul class="nav nav-tabs" id="enx1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="enx1-tab-1" data-toggle="pill" href="#enx1-tabs-1"
                                        role="tab" aria-selected="true">
                                        Entertainment
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="enx1-tab-2" data-toggle="pill" href="#enx1-tabs-2"
                                        role="tab" aria-selected="false">
                                        Politics
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="enx1-tab-3" data-toggle="pill" href="#enx1-tabs-3"
                                        role="tab" aria-selected="false">
                                        Fashion
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="enx1-tab-4" data-toggle="pill" href="#enx1-tabs-4"
                                        role="tab" aria-selected="false">
                                        Tech
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="enx1-tab-5" data-toggle="pill" href="#enx1-tabs-5"
                                        role="tab" aria-selected="false">
                                        Shop
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="enx1-content">
                <div class="tab-pane fade show active" id="enx1-tabs-1" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/19.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Snowflake a Cloud Data Files Warehouse, to Go Public
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/20.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Mirzapur Season 2 Is Coming Soon, Amazon Prime
                                            Video</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/21.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Tesla Seeks Approval for Sensor That Could Child</a>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/22.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Nokia C3 With HD+ Display, 3,04 0mAh Battery May
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="enx1-tabs-2" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/20.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Mirzapur Season 2 Is Coming Soon, Amazon Prime
                                            Video</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/21.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Tesla Seeks Approval for Sensor That Could Child</a>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/19.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Snowflake a Cloud Data Files Warehouse, to Go Public
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/22.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Nokia C3 With HD+ Display, 3,04 0mAh Battery May
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="enx1-tabs-3" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/19.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Snowflake a Cloud Data Files Warehouse, to Go Public
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/20.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Mirzapur Season 2 Is Coming Soon, Amazon Prime
                                            Video</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/21.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Tesla Seeks Approval for Sensor That Could Child</a>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/22.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Nokia C3 With HD+ Display, 3,04 0mAh Battery May
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="enx1-tabs-4" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/20.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Mirzapur Season 2 Is Coming Soon, Amazon Prime
                                            Video</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/21.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Tesla Seeks Approval for Sensor That Could Child</a>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/19.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Snowflake a Cloud Data Files Warehouse, to Go Public
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/22.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Nokia C3 With HD+ Display, 3,04 0mAh Battery May
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="enx1-tabs-5" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/20.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Mirzapur Season 2 Is Coming Soon, Amazon Prime
                                            Video</a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/21.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Tesla Seeks Approval for Sensor That Could Child</a>
                                    </h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/19.png' ) }}" alt="img">
                                    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Snowflake a Cloud Data Files Warehouse, to Go Public
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-post-wrap">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/post/22.png' ) }}" alt="img">
                                    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
                                </div>
                                <div class="details">
                                    <div class="post-meta-single mb-3">
                                        <ul>
                                            <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                            <li><i class="fa fa-user"></i>John R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h6><a href="blog-details.html">Nokia C3 With HD+ Display, 3,04 0mAh Battery May
                                        </a></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
