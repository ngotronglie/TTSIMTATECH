  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              {{-- <a class="nav-link " href="{{ route('admin.dashboard') }}">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a> --}}
          </li><!-- End Dashboard Nav -->
          <li class="nav-item">
              <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                  href="{{ route('roles.index') }}">
                  <i class="bi bi-layout-text-window-reverse"></i><span>Quản lý vai trò</span>
              </a>
          </li><!-- End Tables Nav -->

          {{-- <li class="nav-heading">Pages</li> --}}

          <li class="nav-item">
              {{-- <a class="nav-link collapsed" href="{{ route('admin.users-profile') }}">
                  <i class="bi bi-person"></i>
                  <span>Profile</span>
              </a> --}}
          </li><!-- End Profile Page Nav -->

          <li class="nav-item">
              {{-- <a class="nav-link collapsed" href="{{ route('admin.faq') }}">
                  <i class="bi bi-question-circle"></i>
                  <span>F.A.Q</span>
              </a> --}}
          </li><!-- End F.A.Q Page Nav -->

          <li class="nav-item">
              {{-- <a class="nav-link collapsed" href="{{ route('admin.contact') }}">
                  <i class="bi bi-envelope"></i>
                  <span>Contact</span>
              </a> --}}
          </li><!-- End Contact Page Nav -->

          <li class="nav-item">
              {{-- <a class="nav-link collapsed" href="{{ route('admin.register') }}">
                  <i class="bi bi-card-list"></i>
                  <span>Register</span>
              </a> --}}
          </li><!-- End Register Page Nav -->

          <li class="nav-item">
              {{-- <a class="nav-link collapsed" href="{{ route('admin.login') }}">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Login</span>
              </a> --}}
          </li><!-- End Login Page Nav -->

          <li class="nav-item">
              {{-- <a class="nav-link collapsed" href="{{ route('admin.404') }}">
                  <i class="bi bi-dash-circle"></i>
                  <span>Error 404</span>
              </a> --}}
          </li><!-- End Error 404 Page Nav -->

      </ul>

  </aside><!-- End Sidebar-->
