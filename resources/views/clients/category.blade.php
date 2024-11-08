@extends('clients.layouts.app')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    <!--page-title area-->
    <section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h5 class="page-title">{{ $category->name }}</h5>
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li>{{ $category->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title area end-->

    <div class="cat-page-area pd-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pd-top-50">
                    <div class="row mb-2">
                        @foreach ($categoryPosts as $post)
                            @if ($loop->index <= 5)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-post-wrap style-box">
                                        <div class="thumb">
                                            @php
                                                $image = $post->image;
                                                if (!\Str::contains($image, 'http')) {
                                                    $image = Storage::url($image);
                                                }
                                            @endphp
                                            <img src="{{ $image }}" width="278px" height="165px" alt="img">
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single mb-4 pt-1">
                                                <ul>
                                                    <li><a class="tag-base tag-light-blue"
                                                            href="{{ route('category.posts', $post->category->slug) }}">{{ $post->category->name }}</a>
                                                    </li>
                                                    <li><i class="fa fa-user"></i>{{ $post->user->name }}</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a
                                                    href="{{ route('post-detail', $post->slug) }}">{{ $post->title }}</a>
                                            </h6>
                                            <p>{{ $post->description }}</p>
                                            <a class="btn btn-base mt-4"
                                                href="{{ route('post-detail', $post->slug) }}">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @isset($advertisement)
                        <div class="add-area bg-after-sky my-2">
                            <div class="container overflow-hidden">
                                @foreach ($advertisement as $ads)
                                    @if ($ads->position == 'middle' && $ads->pages == 'category')
                                        @php
                                            $image = $ads->image;
                                            if (!\Str::contains($image, 'http')) {
                                                $image = Storage::url($image);
                                            }
                                        @endphp
                                        <a href="{{ $ads->link }}">
                                            <img src="{{ $image }}" alt="img" height="200"
                                                class="object-fit-cover">
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endisset

                    <div class="row mt-5 mb-2">
                        @foreach ($categoryPosts as $post)
                            @if ($loop->index > 5)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-post-wrap style-box">
                                        <div class="thumb">
                                            @php
                                                $image = $post->image;
                                                if (!\Str::contains($image, 'http')) {
                                                    $image = Storage::url($image);
                                                }
                                            @endphp
                                            <img src="{{ $image }}" width="278px" height="165px" alt="img">
                                        </div>
                                        <div class="details">
                                            <div class="post-meta-single mb-4 pt-1">
                                                <ul>
                                                    <li><a class="tag-base tag-light-blue"
                                                            href="{{ route('category.posts', $post->category->slug) }}">{{ $post->category->name }}</a>
                                                    </li>
                                                    <li><i class="fa fa-user"></i>{{ $post->user->name }}</li>
                                                </ul>
                                            </div>
                                            <h6 class="title"><a
                                                    href="{{ route('post-detail', $post->slug) }}">{{ $post->title }}</a>
                                            </h6>
                                            <p>{{ $post->description }}</p>
                                            <a class="btn btn-base mt-4"
                                                href="{{ route('post-detail', $post->slug) }}">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <nav class="mt-4 text-center my-2">
                        <ul class="pagination">
                            <li class="page-item prev"><a class="page-link" href="#"><i
                                        class="fa fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item next"><a class="page-link" href="#"><i
                                        class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>

                    @isset($advertisement)
                        <div class="add-area bg-after-sky mt-5">
                            <div class="container overflow-hidden">
                                @foreach ($advertisement as $ads)
                                    @if ($ads->position == 'bottom' && $ads->pages == 'category')
                                        @php
                                            $image = $ads->image;
                                            if (!\Str::contains($image, 'http')) {
                                                $image = Storage::url($image);
                                            }
                                        @endphp
                                        <a href="{{ $ads->link }}">
                                            <img src="{{ $image }}" alt="img" height="200"
                                                class="object-fit-cover">
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endisset
                </div>

                @include('clients.layouts.sidebar')

            </div>
        </div>
    </div>
@endsection
