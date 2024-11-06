<aside id="sidebar" class="sidebar d-flex flex-column justify-content-between">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                 <i class="fs-3 bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#cate-nav" data-bs-toggle="collapse" href="#">
                 <i class="fs-3 bi bi-bookmark"></i><span>Quản lý danh mục</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="cate-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.categories.index') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.create') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Categories Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#post-nav" data-bs-toggle="collapse" href="#">
                 <i class="fs-3 bi bi-file-earmark-post"></i><span>Quản lý bài viết</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="post-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.posts.index') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.posts.create') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Categories Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                 <i class="fs-3 bi bi-people"></i><span>Quản lý người dùng</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.users.index') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.create') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Categories Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#ads-nav" data-bs-toggle="collapse" href="#">
                 <i class="fs-3 bi bi-badge-ad-fill"></i><span>Quản lý quảng cáo</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="ads-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.advertisements.index') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.advertisements.create') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Advertisements Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
                 <i class="fs-3 bi bi-telephone"></i><span>Quản lý liên hệ</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.contacts.index') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Contacts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#faq-nav" data-bs-toggle="collapse" href="#">
                 <i class="fs-3 bi bi-question-circle"></i><span>Quản lý F.A.Qs</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="faq-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.faqs.index') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.faqs.create') }}">
                         <i class="fs-4 bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End FAQs Nav -->

    </ul>

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.login') }}">
                 <i class="fs-3 bi bi-box-arrow-right"></i>
                <span>Đăng xuất</span>
            </a>
        </li><!-- End Login Page Nav -->
    </ul>

</aside><!-- End Sidebar-->
