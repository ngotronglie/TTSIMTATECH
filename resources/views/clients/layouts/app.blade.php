<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel=icon href="{{ asset('template/assets/img/favicon.png') }}" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/responsive.css') }}">

    @yield('styles')
</head>

<body>
    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="https://solverwp.com/demo/html/nextpage/index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- header start -->
    @include('clients.layouts.header')
    <!-- navbar end -->

    <!-- banner area start -->
    @if (request()->is('home'))
        @include('layouts.banner')
    @endif
    <!-- banner area end -->
    
    <div style="min-height: 75vh;">
        @yield('content')
    </div>

    @include('clients.layouts.footer')

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    {{-- <script data-cfasync="false" src="{{ asset('template/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script> --}}
    <script src="{{ asset('template/assets/js/vendor.js') }}"></script>
    <!-- main js  -->
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

    @yield('scripts')
</body>

</html>
