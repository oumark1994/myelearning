@extends('admin.template')
@section('contents')
@include('admin.header')
@include('admin.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row justify-center">
      <div class="col-lg-10">
        <div class="card">
          <div class="card-body p-5">
            <h5 class="card-title my-3">Course Videos</h5>
            <!-- Table with hoverable rows -->
            @if (session()->has('message'))

            <div class="alert alert-success">

                {{ session('message') }}

            </div>
        @endif
        <div class="col-12">
          <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
              <h5 class="card-title">Videos</span></h5>
      
              <table class="table table-borderless">
                <a href="{{route('add.video')}}" class=" my-3 btn btn-primary float-end">
                  Create Video
                </a>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Video</th>
                    <th scope="col">Lesson</th>
                    <th scope="col">Duration</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($lessons as $lesson)
                  @foreach ($lesson->videos as $video)
                    
                  <tr>
                    <td>{{$video->id}}</td>
                    <td><a href="#"><img src="{{asset('images/'.$video->thumbnail)}}" alt=""></a></td>
                    <td><a href="#"><video width="60" height="60" src="{{asset('videos/'.$video->video)}}" controls muted></a></td>
                    <td><a href="#" class="text-primary fw-bold">{{$lesson->title}}</a></td>
                    {{-- <td><img src="{{asset('images/'.$lesson->video->video)}}" alt=""></td> --}}
                    <td><a href="#" class="text-primary fw-bold">{{$video->duration}}mn</a></td>
                    <td class="text-center">
                      <a class="btn btn-primary mx-2" href="{{url('edit.video/'.$video->id)}}"><i class="bi px-2 bi-pencil-square text-white"></i></a>
                      <a class="btn btn-danger mx-2" href="{{url('delete.video/'.$video->id)}}"><i class="bi px-2 bi-trash text-white"></i></a>
                    </td>
                  </tr>
                  @endforeach  @endforeach
                    
                  
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