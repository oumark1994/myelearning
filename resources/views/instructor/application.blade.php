@extends('global.template')
@section('contents')
@include('global.header')
 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header-instructor">
    <div class="container py-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10 text-center">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-10 col-lg-8">
                        
                        <h1 class="display-3 text-white animated slideInDown mt-5">Maximum Impact</h1>
                        <p class="fs-5 text-white mb-4 pb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        {{-- <a href="{{url('/application')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Started</a> --}}
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
        <div class="row justify-content-center g-5">
            <livewire:application/> 
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