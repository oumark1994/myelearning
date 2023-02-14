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
            <h5 class="card-title my-3">Course Category</h5>
            <!-- Table with hoverable rows -->
            @if (session()->has('message'))

            <div class="alert alert-success">

                {{ session('message') }}

            </div>
        @endif
        <div class="col-12">
          <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
              <h5 class="card-title">Categories</span></h5>
      
              <table class="table table-borderless">
                <a href="{{route('add.category')}}" class=" my-3 btn btn-primary float-end">
                  Create Sub Category
                </a>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                   
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category )
                  <tr>
                    <th scope="row"><a href="#"><img src="{{asset('images/'.$category ->image)}}" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">{{$category->title}}</a></td>
                    <td class="text-center">
                      <a class="btn btn-primary mx-2" href="{{url('edit.category/'.$category ->id)}}"><i class="bi px-2 bi-pencil-square text-white"></i></a>
                      <a class="btn btn-danger mx-2" href="{{url('delete.category/'.$category ->id)}}"><i class="bi px-2 bi-trash text-white"></i></a>
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