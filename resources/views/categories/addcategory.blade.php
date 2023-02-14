@extends('admin.template')
@section('contents')
@include('admin.header')
@include('admin.sidebar')
<main id="main" class="main">

    <section class="section dashboard">
      <div class="row justify-center align-items-center ">
      <div class="col-lg-8 mt-5 offset-2 ">
        <div class="card">
          <div class="card-body row justify-center m-5">

        <form class="row justify-center g-3" enctype="multipart/form-data" action="{{route('create.category')}}" method="post">
            @csrf
            <div class="col-md-10 my-3">
              <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
              @error('title') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-10 my-3">
              <input type="file" class="form-control" name="image" value="{{old('image')}}"  placeholder="Select Image">
              @error('image') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
            </div>
          <div class="col-md-12 my-3">
            <a href="{{route('categories')}}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save categories</button>
        </div>
    </form>
        
          

        </div>
      </div> 
  </div>
</div>


<!-- Vertical Form -->
        

          </div>
        </div>

      
      </div>      
       

      </div>
    </section>


      

  </main><!-- End #main -->
@endsection 
@yield('scripts')