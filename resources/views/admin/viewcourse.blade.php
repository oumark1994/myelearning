@extends('admin.template')
@section('contents')
@include('admin.header')
@include('admin.sidebar')
<main id="main" class="main">
    <section class="section dashboard">
      <div class="row justify-center align-items-center ">
      <div class="col-lg-8 mt-5 offset-2 ">
        <div class="card">
          <div class="card-body row justify-center text-center m-5">
                      <h5 class="modal-title">Course Details</h5>
                    </div>
                    <div class="modal-body text-center">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h5 class="modal-title my-4">{{$course->title}}</h5>

                        <img id="myimage" src="{{asset('images/'.$course ->featured_image)}}" alt="">
                   <h6 class="m-4">About this Course :<br>{{$course->primary_subject}}</h6>        
                    </div>

                    <div class="my-4 p-5">Description<br>
                        <P class="p-5">{{$course->description}}</P>

                    </div>
                    <div class="col-md-10 my-3">
                      <a href="{{route('courses')}}" class="btn btn-secondary">Courses</a>
                  </div>


                        </div>
                    </div>
  
          </div>
    </div>
    </div>
    
  </main><!-- End #main -->
  @endsection 
  @yield('scripts')
         
