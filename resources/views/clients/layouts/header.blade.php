<div class="navbar-area">
    <!-- topbar end-->
    <div class="topbar-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 align-self-center">
                    <div class="topbar-menu text-md-left text-center">
                        <ul class="align-self-center">
                            <li><a href="{{ route('author') }}">Author</a></li>
                            <li><a href="#">Advertisment</a></li>
                            <li><a href="#">Member</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 mt-2 mt-md-0 text-md-right text-center">
                    <div class="topbar-social">
                        <div class="topbar-date d-none d-lg-inline-block"><i class="fa fa-calendar"></i>
                            {{ date('l, F j', strtotime(now())) }}</div>
                        <ul class="social-area social-area-2">
                            <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="youtube-icon" href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="google-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- topbar end-->

    <!-- adbar end-->
    <div class="adbar-area bg-black d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 align-self-center">
                    <div class="logo text-md-left text-center">
                        <a class="main-logo" href="{{ route('home') }}"><img
                                src="{{ asset('template/assets/img/logo.png') }}" alt="img"></a>
                    </div>
                </div>
                @isset($advertisement)
                    <div class="col-xl-6 col-lg-7 text-md-right text-center">
                        @foreach ($advertisement as $ads)
                            @if ($ads->position == 'header' && $ads->pages == 'home')
                                @php
                                    $image = $ads->image;
                                    if (!\Str::contains($image, 'http')) {
                                        $image = Storage::url($image);
                                    }
                                @endphp
                                <a href="{{ $ads->link }}" class="adbar-right">
                                    <img src="{{ $image }}" alt="img" width="555" height="65"
                                        class="object-fit-cover">
                                </a>
                            @endif
                        @endforeach
                    </div>
                @endisset
            </div>
        </div>
    </div>
    <!-- adbar end-->

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <div class="logo d-lg-none d-block">
                    <a class="main-logo" href="{{ route('home') }}"><img
                            src="{{ asset('template/assets/img/logo.png') }}" alt="img"></a>
                </div>
                <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="nextpage_main_menu">
                <ul class="navbar-nav menu-open">
                    <li class="current-menu-item">
                        <a href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    @foreach ($categories as $category)
                        <li class="current-menu-item">
                            <a href="#">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop d-flex align-items-center">
                <div class="menu-search-inner me-2">
                    <input type="text" placeholder="Search For">
                    <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                </div>
                <div class="auth-buttons d-flex align-items-center"> <!-- Thêm d-flex để căn chỉnh hàng -->
                    @if (Auth::check())
                        <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Đăng xuất</button>
                        </form>
                    @else
                        <!-- Nếu người dùng chưa đăng nhập -->
                        <div class="auth-buttons d-flex align-items-center ms-3">
                            <a href="{{ route('admin.login') }}" class="btn btn-primary btn-sm me-2">Đăng nhập</a>
                            <a href="{{ route('admin.register') }}" class="btn btn-success btn-sm">Đăng ký</a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </nav>


</div>
