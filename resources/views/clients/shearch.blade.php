@extends('clients.layouts.app')

@section('title')
    Kết quả tìm kiếm cho: {{ $searchQuery }}
@endsection

@section('content')
    <section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        {{-- <h5 class="page-title">Kết quả tìm kiếm cho: {{ $searchQuery }}</h5> --}}
                        <ul class="page-list">
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li>Kết quả tìm kiếm: {{ $searchQuery }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cat-page-area pd-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pd-top-50">
                    <div class="row mb-2">
                        @forelse ($searchResults as $post)
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
                                        <h6 class="title">
                                            <a href="{{ route('post-detail', $post->slug) }}">{{ $post->title }}</a>
                                        </h6>
                                        <p>{{ $post->description }}</p>
                                        <a class="btn btn-base mt-4" href="{{ route('post-detail', $post->slug) }}">Read
                                            more</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Không tìm thấy kết quả nào cho từ khóa "{{ $searchQuery }}"</p>
                        @endforelse
                    </div>
                </div>

                @include('clients.layouts.sidebar')
            </div>
        </div>
    </div>
@endsection
