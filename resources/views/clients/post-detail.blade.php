@extends('clients.layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <!--page-title area-->
    <section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h5 class="page-title" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $post->title }}</h5>
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li>{{ $post->title }}</li>
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
                                <div class="thumb text-center">
                                    @php
                                        $image = $post->image;
                                        if (!\Str::contains($image, 'http')) {
                                            $image = Storage::url($image);
                                        }
                                    @endphp
                                    <img src="{{ $image }}" alt="img">
                                </div>
                                <div class="details pb-4">
                                    <div class="post-meta-single mb-2">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="#">{{ $post->category->name }}</a></li>
                                            <li>
                                                <p><i class="fa fa-clock-o"></i>{{ date('d.m.Y', strtotime($post->created_at)) }}</p>
                                            </li>
                                            <li><i class="fa fa-user"></i>{{ $post->user->name }}</li>
                                        </ul>
                                    </div>
                                    <h5 class="title mt-0">{{ $post->title }}</h5>
                                </div>
                            </div>
                            <div class="single-blog-details">
                                <div>
                                    {!! $post->content !!}
                                </div>
                            </div>

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

                            <div class="author-area">
                                <div class="media">
                                    <img src="{{ asset('template/assets/img/author/1.png') }}" alt="img">
                                    <div class="media-body align-self-center">
                                        <h4>{{ $post->user->name }}</h4>
                                        <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,
                                            but because those who do not know how to pursue pleasure rationally
                                            encounter consequences that aextremely painful. Nor again is there anyone
                                            who loves</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (isset($relatedPosts) && $relatedPosts->count() > 0)
                            <div class="related-post">
                                <div class="section-title mb-0">
                                    <h5 class="mb-0">Related Post</h5>
                                </div>
                                <div class="row justify-content-center">
                                    @foreach ($relatedPosts as $post)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-post-wrap">
                                                <div class="thumb">
                                                    @php
                                                        $image = $post->image;
                                                        if (!\Str::contains($image, 'http')) {
                                                            $image = Storage::url($image);
                                                        }
                                                    @endphp
                                                    <img src="{{ $image }}" width="278px" height="165px" alt="img">
                                                    @php
                                                        $colors = ['tag-red', 'tag-blue', 'tag-green', 'tag-orange', 'tag-purple', 'tag-light-green']; 
                                                        $randomColor = $colors[array_rand($colors)];
                                                    @endphp

                                                    <a class="tag-base {{ $randomColor }}" href="{{ route('category.posts', $post->category->slug) }}">{{ $post->category->name }}</a>
                                                </div>
                                                <div class="details">
                                                    <div class="post-meta-single">
                                                        <ul>
                                                            <li><i class="fa fa-clock-o"></i>{{ date('d.m.Y', strtotime($post->created_at)) }}</li>
                                                            <li><i class="fa fa-user"></i>{{ $post->user->name }}</li>
                                                        </ul>
                                                    </div>
                                                    <h6 class="title mt-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                        <a href="{{ route('post-detail', $post->slug) }}"> {{ $post->title }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
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
