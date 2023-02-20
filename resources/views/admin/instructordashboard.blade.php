@extends('admin.template')
@section('contents')
@include('admin.header')
<main id="main" class="main">
    <div class="pagetitle">
      <h1 class="mt-4">Instructor Dashboard</h1>
  
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        
        <div class="col-lg-8">
          <div class="row">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item d-flex ">  
                  <a href="{{route('instructorcreateclass')}}" class=" my-3 btn btn-primary  text-white float-start">
                  Add Create a Class
                </a></a></li>
                {{-- <li class="breadcrumb-item active"><a href="{{url('/instructordashboard')}}">Instructor Dashboard</a></li> --}}
              </ol>
            </nav>
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      {{-- <h6>Filter</h6> --}}
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total<span> | Courses</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      {{-- <h6>Filter</h6> --}}
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Students</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      {{-- <h6>Filter</h6> --}}
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total <span>| Likes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Instructor Details</h5>
      
                    <!-- Default Tabs -->
                    <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="false">Courses</button>
                      </li> 
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                      </li>
                                     
                      <li class="nav-item flex-fill" role="presentation">
                        <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Course Discussions</button>
                      </li>
                    </ul>
                    <div class="tab-content pt-2" id="myTabjustifiedContent">
                      <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                          <h5 class="card-title">About</h5>
                          <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>
        
                          <h5 class="card-title">Profile Details</h5>
        
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                            <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                          </div>
        
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">Company</div>
                            <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                          </div>
        
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">Job</div>
                            <div class="col-lg-9 col-md-8">Web Designer</div>
                          </div>
        
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">Country</div>
                            <div class="col-lg-9 col-md-8">USA</div>
                          </div>
        
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">Address</div>
                            <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                          </div>
        
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">Phone</div>
                            <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                          </div>
        
                          <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                          </div>
                        </div>
                              </div>
                      <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pb-0">
                          <h5 class="card-title">Course create by  &amp; Instructor <span>|</span></h5>
            
                          <div class="news">
                            @foreach ($courses as $course)
                            <div class="post-item py-2 clearfix">
                              <img width="60" height="60" src="{{asset('images/'.$course->featured_image)}}" alt="hh">
                              <h4><a href="#">{{$course->title}}</a></h4>
                              <p>{{$course->primary_subject}}</p>
                            </div>
                            @endforeach
                           
                           
            
                           
            

                           
            
                          </div><!-- End sidebar recent posts-->                      </div>
                     
                      <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                        Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                      </div>
                    </div><!-- End Default Tabs -->
      
                  </div>
                </div>
      
            {{-- </div>
     <div class="row g-3">
          <h5 class="mt-4">Your Online Course</h5>
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
            <a class="position-relative d-block h-100 overflow-hidden" href="">
                <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/frontend/img/cat-4.jpg')}}" alt="" style="object-fit: cover;">
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                    <h5 class="m-0">Online Marketing</h5>
                    <small class="text-primary">49 Courses</small>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
          <a class="position-relative d-block h-100 overflow-hidden" href="">
              <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/frontend/img/cat-4.jpg')}}" alt="" style="object-fit: cover;">
              <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                  <h5 class="m-0">Online Marketing</h5>
                  <small class="text-primary">49 Courses</small>
              </div>
          </a>
      </div>
      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
        <a class="position-relative d-block h-100 overflow-hidden" href="">
            <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/frontend/img/cat-4.jpg')}}" alt="" style="object-fit: cover;">
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                <h5 class="m-0">Online Marketing</h5>
                <small class="text-primary">49 Courses</small>
            </div>
        </a>
    </div>
    </div> --}}
            </div>    
          </div>
       
       

      </div>
    </section>

  </main><!-- End #main -->
@endsection 
@yield('scripts')