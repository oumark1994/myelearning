@extends('admin.template')
@section('contents')
@include('admin.header')
@include('admin.sidebar')
<main id="main" class="main">
<section class="section dashboard">
<div class="row justify-center">
<div class="col-lg-8 mt-5 offset-2 ">
<div class="card p-3">
<div class="card-body row justify-center  ">
      <h5 class="modal-title">Application Details</h5>
</div>
                    <div class="modal-body ">
                        <div class="row ">
                     <div class="col-md-6">
                     <img width="100%" height="350" src="{{asset('storage/images/'.$application->image)}}" alt="">
                    </div>
                 <div class="col-md-6">
                    <video width="100%" height="350" controls>
                        <source src="{{$application->video_link}}">
                    </video> 
                 {{-- <iframe width="420" height="315"
                 src={{$application->video_link}}>
                 </iframe>                 --}}
               </div>
                <div class="col-md-6">
                  <h5 class="modal-title  my-2 mx-2 px-1">Firstname: {{$application->firstname}}</h5>
                </div>
                <div class="col-md-6">
                    <h5 class="modal-title  my-2 mx-2 px-1">Lastname:{{$application->lastname}}</h5>
                 </div>
                 <div class="col-md-6">
                    <h5 class="modal-title  my-2 mx-2 px-1">Email:{{$application->email}}</h5>
                 </div>
                 <div class="col-md-6">
                    <h5 class="modal-title  my-2 mx-2 px-1">Address:{{$application->address}}</h5>
                 </div>
                 <div class="col-md-6">
                    <h5 class="modal-title  my-2 mx-2 px-1">Subject:{{$application->subject}}</h5>
                 </div>
                 <div class="col-md-6">
                    <h5 class="modal-title  my-2 mx-2 px-1">Language:{{$application->language}}</h5>
                 </div>
                 <div class="col-md-12">
                    <h5 class="modal-title  my-2 mx-2 px-1">Lessons:{{$application->lessons}}</h5>
                 </div>
                 <div class="col-md-12">
                  <h5 class="modal-title  my-2 mx-2 px-1">Description:{{$application->description}}</h5>
                 </div>
                 <div class="col-md-6">
                    <h5 class="modal-title  my-2 mx-2 px-1">Availibility:{{$application->availibility}}</h5>
                 </div>
                
    
                    <div class="col-md-10 my-3 d-flex justify-content-between">
                        @if ($application->status == 0)
                            <a href="{{url('approved/'.$application->id)}}" class="btn btn-outline-warning text-primary fw-bold" wire:click="approved">Approved</a>

                          @else
                          <a href="{{url('desapproved/'.$application->id)}}" class="btn btn-outline-primary text-danger fw-bold" wire:click="approved">Desapproved</a>
                          @endif           
                           <a class="btn btn-danger mx-2" href="{{url('delete.application/'.$application->id)}}"><i class="bi px-2 bi-trash text-white"></i>Delete</a>

                  </div>


                        </div>
                    </div>
  
          </div>
    </div>
    </div>
  </main><!-- End #main -->
  @endsection 
  @yield('scripts')
         
