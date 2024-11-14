<div class="navbar-area">
    <div class="adbar-area bg-black d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 align-self-center">
                    <div class="logo text-md-left text-center">
                        <a class="main-logo" href="{{ route('home') }}">
                            <img src="{{ asset('template/admin/assets/img/logo.svg') }}" alt="img">
                            <span class="text-white align-middle px-2">WorldSchools.Space</span>
                        </a>
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
                                    <img src="{{ $image }}" alt="img" width="555" height="65" class="object-fit-cover">
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
                            src="{{ asset('template/admin/assets/img/logo.svg') }}" alt="img"></a>
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
                    <!-- Link đến Trang Chủ -->
                    <li class="current-menu-item">
                        <a href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    @foreach ($categories as $category)
                        @if ($category->posts->count() > 0)
                            <li class="current-menu-item">
                                <a href="{{ route('category.posts', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="nav-right-part nav-right-part-desktop d-flex justify-content-end align-items-center">
                <div class="menu-search-inner">
                    <form action="{{ route('search') }}" method="GET" class="d-flex">
                        <input type="text" name="search" placeholder="Tìm kiếm">
                        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="auth-buttons d-flex align-items-center">
                    @if (Auth::check())
                        <div class="notification-icon">
                            <button class="btn btn-link mx-2" id="notification-btn" data-toggle="dropdown">
                                <i class="bi bi-megaphone" style="font-size: 30px; color: #000000;"></i>
                                <span class="badge badge-danger" id="notification-count">0</span>
                            </button>
                            <div class="dropdown-menu" id="notification-list">

                                <!-- Các thông báo mới sẽ được hiển thị ở đây -->
                                <a class="dropdown-item" href="#">Không có thông báo mới</a>
                            </div>
                        </div>
                        <div class="dropdown" style="width: 100px;">
                            <button class="btn btn-light btn-sm dropdown-toggle d-flex align-items-center"
                                type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- SVG icon -->
                                <i class="bi bi-person-fill-gear"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('home/profile') }}">Quản lý hồ sơ</a>
                                </li>
                                @if (Auth::check() && Auth::user()->admin())
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Trang quản trị</a>
                                    </li>
                                @endif
                                <li>
                                    <a class="dropdown-item" href="{{ route('auth.logout') }}">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="auth-buttons d-flex align-items-center ms-1">
                            <a href="{{ route('auth.login') }}" class="btn btn-primary me-1">Đăng nhập</a>
                            <a href="{{ route('auth.register') }}" class="btn btn-primary">Đăng ký</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>