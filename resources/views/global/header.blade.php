{{-- 
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
     
  <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            {{-- <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>MAXIMUM IMPACT</h2> --}}
            {{-- <img src="{{asset('assets/frontend/img/logo.png')}}"/>
        </a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Browse</a>
          <div class="dropdown-menu fade-down mt-3">
              <a href="team.html" class="dropdown-item">Animation</a>
              <a href="testimonial.html" class="dropdown-item">Creative Design</a>
              <a href="404.html" class="dropdown-item">Film & Video</a>
              <a href="404.html" class="dropdown-item">Fine Art</a>
              <a href="404.html" class="dropdown-item">Graphic</a>
              <a href="404.html" class="dropdown-item">Illustration</a>
              <a href="404.html" class="dropdown-item">Music</a>
              <a href="404.html" class="dropdown-item">Photography</a>
              <a href="404.html" class="dropdown-item">UI/UX Design</a>
              <a href="404.html" class="dropdown-item">Web Design</a>
              <a href="404.html" class="dropdown-item">Business Analytics</a>
              <a href="404.html" class="dropdown-item">Freelance & Entrepreunership</a>
              <a href="404.html" class="dropdown-item">Leadership & Management</a>
              <a href="404.html" class="dropdown-item">Life Style</a>
              <a href="404.html" class="dropdown-item">Productivity</a>
              <a href="404.html" class="dropdown-item">Film & Video</a>
          </div>
      </div>
      
        <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Find a course of your choice" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
        </div>
       
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.html" class="nav-item nav-link active">Instructor</a>
            </div>
            
        </div>
        <div class="nav-item dropdown me-5">
          @if ($data)
          <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">{{$data->firstname}}</a>
          <div class="dropdown-menu fade-down mt-2">
            <a href="team.html" class="dropdown-item"><i class="fa fa-user "></i>My Profile</a>
            <a href="testimonial.html" class="dropdown-item"><i class="fa fa-book "></i>Learning Path</a>
            <a href="{{route('logout')}}" class="dropdown-item">Sign Out</a>
        </div>
          @endif      
      </div>
 
    </nav>  --}}
    <header id="header" class="header fixed-top px-5 d-flex ju align-items-center">

      <div class="d-flex align-items-center ps-3 justify-content-between">
        <a href="{{url('/')}}" class="logo d-flex align-items-center">
          <img src="{{asset('assets/frontend/img/logo.png')}}" alt="">
        </a>
        {{-- <i class="bi bi-list toggle-sidebar-btn"></i> --}}
      </div><!-- End Logo -->
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center justify-content-around ">
          <li class="nav-item dropdown">
  
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                Browse
            </a><!-- End Notification Icon -->
  <ul class="dropdown-menu mt-4 dropdown-menu-end dropdown-menu-arrow notifications">
    @foreach ($categories as $category)       
    <a href="#" class="dropdown-item">{{$category->title}}</a>
    @endforeach
  </ul><!-- End Notification Dropdown Items -->

           
  
          </li><!-- End Notification Nav -->
      <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End Search Bar -->
  
     @if ($data->role === 2)
     <li class="nav-item ">
     <a class="nav-link nav-icon" href="{{route('admin')}}">
      Dashboard
      </a><!-- End Notification Icon -->
    </li><!-- End Notification Nav --> 
    @elseif ($data->role === 0)
    <li  class="me-4">
      <a class="" href="{{url('/beinstructor')}}">
        Be Instructor
        </a>
    </li>
    <li  class="me-4">
      <a class="" href="{{url('/mycourse')}}">
          My Class
      </a><!-- End Notification Icon -->
    </li>
    @elseif($data->role ===0)
  <!-- End Notification Nav -->
    @elseif($data->role === 1)
    <li class="me-4">
    <a class="" href="{{url('/instructordashboard')}}">
     My Courses
      </a><!-- End Notification Icon -->
    </li><!-- End Notification Nav -->
     @endif
          <li class="nav-item dropdown">
  
          
  
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->
          <li class="nav-item dropdown pe-3">
  @if($data)
  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
    <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
    <span class="d-none d-md-block dropdown-toggle ps-2">{{$data->firstname}}</span>
  </a><!-- End Profile Iamge Icon -->
  @else
   
  @endif
          
  
            <ul class="dropdown-menu dropdown-menu-end me-5 dropdown-menu-arrow profile mt-3">
              {{-- <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
               --}}
               @if ($data->role == 1)
               <li>
                <a class="dropdown-item d-flex align-items-center" href="{{url('/instructordashboard')}}">
                  <i class="bi bi-book"></i>
                  <span>My Courses</span>
                </a>
              </li>
               @endif
           
             
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