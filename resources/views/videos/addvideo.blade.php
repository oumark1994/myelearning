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

        <form class="row justify-center g-3" enctype="multipart/form-data" action="{{url('createvideo')}}" method="post">
            @csrf
            <div class="col-md-10 my-3">
              <label for="validationDefault01" class="form-label">Select Lesson</label>
              <select id="inputState" name="lesson_id" class="form-select">
                  <option selected >Choose Lesson</option>
                  @foreach ($lessons as $lesson )
                  
                  <option value="{{$lesson->id}}">{{$lesson->title}}</option>  
                  @endforeach
                </select> @error('lesson') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
            </div>
              <div class="col-md-5 my-3">
                <label for="validationDefault01" class="form-label">Course Duration</label>
                <input type="text" class="form-control" name="duration" value="{{old('duration')}}" placeholder="Duration">
                @error('duration') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-5 my-3">
                <label for="validationDefault01" class="form-label">Video Thumbnail</label>
                     <input type="file" class="form-control" name="thumbnail" value="{{old('thumbnail')}}">
                     @error('thumbnail') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-10 my-3">
                <label for="validationDefault01" class="form-label">Video</label>
                     <input type="file" class="form-control" name="video" value="{{old('video')}}">
                     @error('video') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                  <div class="my-3 progress">
                    <div class="bar progress-bar"></div>
                    <div class="percent" style="position:absolute;left:50%;color:black">0%</div>
                  </div>
              </div>
             
              {{-- <div class="progress" id="progress_bar" style="display:none;height:50px;line-hight:50px">
                <div class="progress-bar" id="progress_bar_process" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
              </div>
              <div id="uploaded_image" class="now mt-5"></div> --}}
           {{--           
              <livewire:video-upload/> --}}
                {{-- <div class="progress col-md-10 mb-3">
                  <div class="bar"></div>
                  <div class="percent">0%</div>
                </div> --}}
                 <div class="col-md-12 my-3">
            <a href="{{route('videos')}}" class="btn btn-secondary">Cancel</a>
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