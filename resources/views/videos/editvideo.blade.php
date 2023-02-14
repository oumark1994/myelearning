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
        <form class="row justify-center g-3" enctype="multipart/form-data" action="{{url('updatevideo/'.$video->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="col-md-10 my-3">
              <label for="validationDefault01" class="form-label">Select Lesson</label>
            <select id="" name="lesson_id" class="form-select">
                @foreach ($lessons as $lesson ) 
               <option selected value="{{$lesson->id}}">{{$lesson->title}}</option>  
                @endforeach
              </select> @error('lesson') <span class="error my-2 text-danger">{{$message }}</span> @enderror
            </div>
              <div class="col-md-10 my-3">
                <input type="text" class="form-control" name="duration" value="{{$video->duration}}">
                @error('duration') <span class="error my-2 text-danger">{{$message }}</span> @enderror
              </div>
              <div class="col-md-10 my-3">
                <input type="text" class="form-control" name="thumbnail" value="{{$video->thumbnail}}">
                @error('thumbnail') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-10 my-3">
                <input type="text" class="form-control" name="video" value="{{$video->video}}">
                @error('video') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
          <div class="col-md-12 my-3">
            <a href="{{route('videos')}}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update videos</button>
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