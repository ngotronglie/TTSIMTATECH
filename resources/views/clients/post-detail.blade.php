@extends('clients.layouts.app')

@section('title')
    Chi tiết bài viết
@endsection

@section('content')
    <!--page-title area-->
    <section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h5 class="page-title">Chi tiết bài viết</h5>
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li>Chi tiết bài viết</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title area end-->

    <div class="blog-page-area pd-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pd-top-50">
                    <div class="blog-details-page-inner">
                        <div class="single-blog-inner m-0">
                            <div class="single-post-wrap style-overlay">
                                <div class="thumb">
                                    <img src="{{ asset('template/assets/img/blog/4.png') }}" alt="img">
                                </div>
                                <div class="details pb-4">
                                    <div class="post-meta-single mb-2">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="#">Tech</a></li>
                                            <li>
                                                <p><i class="fa fa-clock-o"></i>08.22.2023</p>
                                            </li>
                                            <li><i class="fa fa-user"></i>R. Lambert</li>
                                        </ul>
                                    </div>
                                    <h5 class="title mt-0">Uttarakhand’s Hemkund Sahib yatra to start from</h5>
                                </div>
                            </div>
                            <div class="single-blog-details">
                                <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut unde
                                    omnis iste natus error sit voluptatem, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur magni dolores eos qui ratione sequi nesciunt Neque por quisquam est</p>
                                <blockquote class="blockquote">
                                    <i class="fa fa-quote-right"></i>
                                    <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi
                                        ut aliquip ex ea commodo. Duis aute irure dolor in in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    </p>
                                </blockquote>
                            </div>
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do not know how to pursue pleasure rationally encounter consequences that are
                                extremely painful. Nor again is there anyone who loves or pursues or desires to obtain
                                pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure.</p>

                            @isset($advertisement)
                                @foreach ($advertisement as $ads)
                                    @if ($ads->position == 'middle' && $ads->pages == 'post_detail')
                                        @php
                                            $image = $ads->image;
                                            if (!\Str::contains($image, 'http')) {
                                                $image = Storage::url($image);
                                            }
                                        @endphp
                                        <div class="add-area">
                                            <a href="{{ $ads->link }}">
                                                <img src="{{ $image }}" alt="img" height="200" class="object-fit-cover">
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            @endisset

                            <h5>Expression in New Human Rights Policy</h5>
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do not know how to pursue pleasure rationally encounter consequences that are
                                extremely painful. Nor again is there anyone who loves or pursues or desires to obtain
                                pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure.</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="thumb mb-3 mb-sm-0">
                                        <img src="{{ asset('template/assets/img/blog/5.png') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('template/assets/img/blog/6.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="video-area">
                                <h5>Expression in New Human Rights Policy</h5>
                                <div class="single-blog-inner mb-4">
                                    <div class="thumb">
                                        <img src="{{ asset('template/assets/img/blog/7.png') }}" alt="image">
                                        <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0"
                                            data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do not know how to pursue pleasure rationally encounter consequences that are
                                extremely painful. Nor again is there anyone who loves or pursues or desires to obtain
                                pain of itself, because it is pain, but because occasionally circumstances occur in
                                which toil and pain can procure him some great pleasure.</p>
                            <div class="meta">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="tags">
                                            <span>Tags:</span>
                                            <a href="#">Tin tức,</a>
                                            <a href="#">Bài viết,</a>
                                            <a href="#">Tạp chí</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 text-md-right">
                                        <div class="blog-share">
                                            <span>Share:</span>
                                            <ul class="social-area social-area-2 d-inline">
                                                <li><a class="facebook-icon" href="#"><i
                                                            class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li><a class="youtube-icon" href="#"><i
                                                            class="fa fa-youtube-play"></i></a></li>
                                                <li><a class="instagram-icon" href="#"><i
                                                            class="fa fa-instagram"></i></a></li>
                                                <li><a class="google-icon" href="#"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="author-area">
                                <div class="media">
                                    <img src="{{ asset('template/assets/img/author/1.png') }}" alt="img">
                                    <div class="media-body align-self-center">
                                        <h4>Nathan George</h4>
                                        <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who do not know how to pursue pleasure rationally
                                            encounter consequences that aextremely painful. Nor again is there anyone
                                            who loves</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related-post">
                            <div class="section-title mb-0">
                                <h5 class="mb-0">Related Post</h5>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-post-wrap">
                                        <div class="thumb">
                                            <img src="{{ asset('template/assets/img/post/19.png') }}" alt="img">
                                            <a class="tag-base tag-red" href="#">Tech</a>
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    <li><i class="fa fa-user"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title mt-2"><a href="#">Lifting Weights Makes Your Nervous</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-post-wrap">
                                        <div class="thumb">
                                            <img src="{{ asset('template/assets/img/post/20.png') }}" alt="img">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    <li><i class="fa fa-user"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title mt-2"><a href="#">New, Remote Weight-Loss Method </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-post-wrap">
                                        <div class="thumb">
                                            <img src="{{ asset('template/assets/img/post/21.png') }}" alt="img">
                                            <a class="tag-base tag-light-green" href="#">Tech</a>
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li><i class="fa fa-clock-o"></i>08.22.2023</li>
                                                    <li><i class="fa fa-user"></i>08.22.2023</li>
                                                </ul>
                                            </div>
                                            <h6 class="title mt-2"><a href="#">Social Connection Boosts Fitness App
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-comment">
                            <div class="section-title">
                                <h4>3 Comments</h4>
                            </div>
                            <div class="media">
                                <a href="#">
                                    <img src="{{ asset('template/assets/img/author/2.png') }}" alt="comment">
                                </a>
                                <div class="media-body">
                                    <h5><a href="#">John F. Medina</a></h5>
                                    <span class="date">25 July 2023</span>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pawas born and I will give you a complete account</p>
                                    <a href="#">Reply <i class="la la-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="media nesting">
                                <a href="#">
                                    <img src="{{ asset('template/assets/img/author/3.png') }}" alt="comment">
                                </a>
                                <div class="media-body">
                                    <h5><a href="#">Jeffrey T. Kelly</a></h5>
                                    <span class="date">25 July 2023</span>
                                    <p>Again is there anyone who loves or pursues or desires to obtain paiits ecause it
                                        is pain, but because occasionally circumstances occur in which</p>
                                    <a href="#">Reply <i class="la la-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="media">
                                <a href="#">
                                    <img src="{{ asset('template/assets/img/author/2.png') }}" alt="comment">
                                </a>
                                <div class="media-body">
                                    <h5><a href="#">Richard B. Zellmer</a></h5>
                                    <span class="date">25 July 2023</span>
                                    <p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                        soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                                    </p>
                                    <a href="#">Reply <i class="la la-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form">
                            <div class="section-title mb-0">
                                <h4 class="mb-0">Leave A Comment</h4>
                            </div>
                            <form class="contact-form-wrap">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="single-input-wrap input-group">
                                            <input type="text" class="form-control" placeholder="Your Full Name">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-user"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="single-input-wrap input-group">
                                            <input type="text" class="form-control" placeholder="Your Email">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="single-input-wrap message input-group">
                                            <textarea class="form-control" rows="4" name="note" placeholder="Write Message"></textarea>
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-pencil"></i></div>
                                            </div>
                                        </div>
                                        <div class="submit-area">
                                            <button type="submit" class="btn btn-base">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                @include('clients.layouts.sidebar')

            </div>
        </div>
    </div>
@endsection
