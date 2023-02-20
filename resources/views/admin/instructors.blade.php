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
              <h5 class="card-title">Instructors</span></h5>
      
              <table class="table table-borderless">
              
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Language</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Location</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($instructors as $instructor )
                  <tr>
                    <th scope="row"><a href="#"><img height="40px" width="50px" src="{{asset('storage/images/'.$instructor->image)}}" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">{{$instructor->firstname}}</a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$instructor->lastname}}</a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$instructor->language}}</a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$instructor->subject}}</a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$instructor->address}}</a></td>
                    <td class="text-center">
                      {{-- <a class="btn btn-info mx-2" href="{{url('view.instructor/'.$instructor->id)}}"><i class="px-2 bi bi-eye text-white"></i></a> --}}
                      <a class="btn btn-danger mx-2" href="{{url('delete.instructor/'.$instructor->id)}}"><i class="bi px-2 bi-trash text-white"></i></a>
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