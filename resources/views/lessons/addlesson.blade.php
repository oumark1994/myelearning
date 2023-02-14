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

        <form class="row justify-center g-3" enctype="multipart/form-data" action="{{route('create.lesson')}}" method="post">
            @csrf
            <div class="col-md-10 my-3">
              <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
              @error('title') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-10 my-3">
                <select  name="course_id" class="form-select">
                    <option selected >Choose Course</option>
                    @foreach ($courses as $course )
                    <option value="{{$course->id}}">{{$course->title}}</option>  
                    @endforeach
                  </select>                
                  @error('course_id') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
            
             
  
          <div class="col-md-12 my-3">
            <a href="{{route('lessons')}}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save videos</button>
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