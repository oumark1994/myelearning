@extends('global.template')
@section('contents')
 <!-- Header Start -->
 @include('global.header')
 <div class="container-fluid bg-primary py-5 mb-5 page-header-instructor">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10 text-center">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-10 col-lg-8">
                        
                        <h1 class="display-3 text-white animated slideInDown mt-5">Become an instructor</h1>
                        <p class="fs-5 text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.</p>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Started</a>
                        {{-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/frontend/img/about.jpg')}}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-4">How to become an instructor</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-8">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Plan a Curriculum</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Record a video</p>
                    </div>
                    <div class="col-sm-8">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Launch your video</p>
                    </div>
                   
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="{{url('/application')}}">Get Started</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Experts Instructors</h6>
            <h1 class="mb-5">Talking about E-learning</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('assets/frontend/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('assets/frontend/img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('assets/frontend/img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="{{asset('assets/frontend/img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Client Name</h5>
                <p>Profession</p>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial End -->
@endsection