@extends('admin.template')
@section('contents')
@include('admin.header')
@include('admin.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row justify-center">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body p-5">
            <!-- Table with hoverable rows -->
            @if (session()->has('message'))

            <div class="alert alert-success">

                {{ session('message') }}

            </div>
        @endif
        <div class="col-12">
          <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
              <h5 class="card-title">Courses</span></h5>
      
              <table class="table table-borderless">
                <a href="{{route('addcourse')}}" class=" my-3 btn btn-primary float-end">
                  Create  Course
                </a>
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Level</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Published</th>
                    
    
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($courses as $course )
                  <tr>
                    <th scope="row"><a href="#"><img height="40px" width="50px" src="{{asset('images/'.$course ->featured_image)}}" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">{{$course->title}}</a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$course->price}}$</a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$course->level}}</a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$course->duration}}mn</a></td>
                    <td>@if ($course->publised == 0)
                      <a href="#" class="btn btn-outline-warning text-primary fw-bold">Not Published</a>
                      
                    @else
                    <a href="#" class="btn btn-outline-primary text-primary fw-bold">Published</a>
                    @endif</td>
                    <td class="text-center">
                      <a class="btn btn-info mx-2" href="{{url('view.course/'.$course->id)}}"><i class="px-2 bi bi-eye text-white"></i></a>
                      <a class="btn btn-primary mx-2" href="{{url('edit.course/'.$course->id)}}" ><i class="bi px-2 bi-pencil-square text-white"></i></a>
                      <a class="btn btn-danger mx-2" href="{{url('delete.course/'.$course->id)}}"><i class="bi px-2 bi-trash text-white"></i></a>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>

      
            </div>
      
          </div>
        </div><!-- End Top Selling -->
            <!-- End Table with hoverable rows -->

          </div>
        </div>

      
      </div>      
       

      </div>
     
    </section>
  </main><!-- End #main -->
@endsection 
@yield('scripts')