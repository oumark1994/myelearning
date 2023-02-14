
    <header id="header" class="header fixed-top px-5 d-flex ju align-items-center">

        <div class="d-flex align-items-center ps-3 justify-content-between">
          <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <img src="{{asset('assets/frontend/img/logo.png')}}" alt="">
          </a>
          {{-- <i class="bi bi-list toggle-sidebar-btn"></i> --}}
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle " href="#">
                <i class="bi bi-search"></i>
              </a>
            </li><!-- End Search Icon-->
            <li class="nav-item dropdown pe-3">
  
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
      <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
      <span class="d-none d-md-block dropdown-toggle ps-2">Admin1</span>
    </a><!-- End Profile Iamge Icon -->
              <ul class="dropdown-menu dropdown-menu-end me-5 dropdown-menu-arrow profile mt-4">
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>My Profile</span>
                  </a>
                </li>
                
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                    <i class="bi bi-book"></i>
                    <span>My Classes</span>
                  </a>
                </li>
               
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Sign Out</span>
                  </a>
                </li>
    
              </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
    
          </ul>
        </nav><!-- End Icons Navigation -->
    
      </header><!-- End Header -->