

@extends('admin.template')
@section('contents')
@include('admin.header')
@include('admin.sidebar')
<main id="main" class="main">

    <section class="section dashboard">
      <div class="row justify-center align-items-center ">
      <div class="col-lg-8 mt-5 offset-2 ">
        <a href="{{route('courses')}}" class=" my-3 btn btn-primary">
          Courses
        </a>
        <div class="card">
          <div class="card-body row justify-center m-5">
          

            <form class="row justify-center " enctype="multipart/form-data" action="{{url('updatecourse/'.$course->id)}}" method="post">
              @csrf
              @method('PUT')
                 
                                  <div class="col-md-10 my-3">
                                      <input type="text" class="form-control" name="title" value="{{$course->title}}" placeholder="Title">
                                      @error('title') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-10 my-3">
                                        <select id="inputState" name="category_id" class="form-select">
                                            <option selected >Choose Category</option>
                                            @foreach ($categories as $category )
                                            
                                            <option value="{{$category->id}}">{{$category->title}}</option>  
                                            @endforeach
                                          </select>                
                                          @error('category_id') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <select id="inputState" name="subcategory_id" class="form-select">
                                            <option selected >Choose Sub Category</option>
                                            @foreach ($subcategories as $subcategory )
                                            
                                            <option value="{{$subcategory->id}}">{{$subcategory->title}}</option>  
                                            @endforeach
                                          </select>               
                                           @error('subcategory_id') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <select id="inputState" name="level" class="form-select">
                                            <option selected >Choose Level</option>
                                            <option value="bigenner" >Bigenner</option>
                                            <option value="intermediate" >Intermediate</option>
                                            <option value="advanced" >Advanced</option>
                        
                                           
                                          </select>                
                                          @error('level') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <div class="form-floating">
                                          <textarea class="form-control"  id="floatingTextarea" name="primary_subject" style="height: 50px;">{{$course->primary_subject}}</textarea>
                                        </div>
                                        @error('primary_subject') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                        
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <div class="form-floating">
                                          <textarea class="form-control" placeholder="course description"  name="description"id="floatingTextarea" style="height: 150px;">{{ $course->description }}</textarea>
                                        </div>
                                        @error('description') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                        
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <input type="number" class="form-control" name="price" value="{{$course->price}}" placeholder="Price">
                                        @error('price') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <input type="text" class="form-control" name="promo_link" value="{{$course->promo_link}}" >
                                        @error('promo_link') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                      </div>
                                      <div class="col-md-10 my-3">
                                          <img id="myimage" height="150" class="mb-3" src="{{asset('images/'.$course ->featured_image)}}" alt="">
                                        <input type="text" class="form-control" name="featured_image" value="{{$course->featured_image}}" p>
                                        @error('featured_image') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <input type="text" class="form-control" name="featured_video"  value="{{$course->featured_image}}">
                                        @error('featured_video') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <input type="text" class="form-control" name="duration" value="{{$course->duration}}">
                                        @error('duration') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                                      </div>
                                      <div class="col-md-10 my-3">
                                        <a href="{{route('courses')}}" class="btn btn-secondary">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Update courses</button>
                                    </div>
                                  </div>
                           
                           
                          </div>
                        </div><!-- End Disabled Animation Modal-->
                   
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