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
                <div class="auth-buttons d-flex align-items-center">
                    @if (Auth::check())
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm dropdown-toggle d-flex align-items-center mr-5 ml-5" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- SVG icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                                </svg>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="{{ route('home/profile') }}">Quản lý hồ sơ</a></li>
                                <li>
                                    <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Đăng xuất</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
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