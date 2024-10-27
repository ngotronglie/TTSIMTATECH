<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#cate-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-list-ul"></i><span>Quản lý danh mục</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="cate-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.create') }}">
                        <i class="bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Categories Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#ads-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-volume-up"></i><span>Quản lý quảng cáo</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="ads-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.advertisements.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.advertisements.create') }}">
                        <i class="bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Advertisements Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-telephone"></i><span>Quản lý liên hệ</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.contacts.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Contacts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#faq-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-question-circle"></i><span>Quản lý F.A.Qs</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="faq-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.faqs.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.faqs.create') }}">
                        <i class="bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End FAQs Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('admin.tables-general') }}">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.tables-data') }}">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.users-profile') }}">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.register') }}">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.login') }}">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.404') }}">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
