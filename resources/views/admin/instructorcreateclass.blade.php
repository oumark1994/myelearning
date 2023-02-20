@extends('admin.template')
@section('contents')
@include('admin.header')
<main id="main" class="main">
    <section class="section dashboard mt-4">
      <div class="row justify-center align-items-center ">
      <div class="col-lg-8 mt-6">
        <div class="card">
            <div class="card-title">
                <h3 class="px-3">Create Your Class</h3>
            </div>
          <div class="card-body row justify-center m-6">

        <form class="row justify-center g-3" enctype="multipart/form-data" action="{{route('instructoraddcourse')}}" method="post">
            @csrf
            <div class="col-md-12 my-3">
              <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title">
              @error('title') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 my-3">
                <select id="inputState" name="level" class="form-select">
                    <option selected >Choose Level</option>
                    <option value="bigenner" >Bigenner</option>
                    <option value="intermediate" >Intermediate</option>
                    <option value="advanced" >Advanced</option>
                  </select>                
                  @error('level') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control"  id="floatingTextarea" name="primary_subject"  style="height: 60px;">{{old('primary_subject')}}</textarea>
                  <label for="floatingTextarea">About description about the course</label>
                </div>
                @error('primary_subject') <span class="error my-2 text-danger">{{ $message }}</span> @enderror

              </div>
            <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="course description"  name="description"id="floatingTextarea" style="height: 160px;">{{old('description')}}</textarea>
                  <label for="floatingTextarea">Course description</label>
                </div>
                @error('description') <span class="error my-2 text-danger">{{ $message }}</span> @enderror

              </div>
              <div class="col-md-6 my-3">
                <input type="number" class="form-control" name="price" value="{{old('price')}}" placeholder="Price">
                @error('price') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-6 my-3">
                <input type="text" class="form-control" name="duration" value="{{old('duration')}}" placeholder="duration">
                @error('duration') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-7 my-3">
                <select id="inpuCategory" name="category_id" class="form-select">
                    <option selected >Choose Category</option>
                    @foreach ($categories as $category )
      
                    <option value="{{$category->id}}">{{$category->title}}</option>  
                    @endforeach
                  </select>                
                  @error('category_id') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-5  my-3" id="sub">
                <select id="inputSubcategory" name="subcategory_id" class="form-select">
                    {{-- <option selected >Choose Sub Category</option>
                    @foreach ($subcategories as $subcategory )
                    
                    <option value="{{$subcategory->id}}">{{$subcategory->title}}</option>  
                    @endforeach --}}
                  </select>               
                   @error('subcategory_id') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-12 my-3">
                <input type="text" class="form-control" name="promo_link" value="{{old('promo_link')}}" placeholder="Promo link">
                @error('promo_link') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-12">
                <label>Featured Image</label>
                <input type="file" class="form-control" name="featured_image" value="{{old('featured_image')}}" placeholder="Featured Image">
                @error('featured_image') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
              </div>
              <div class="col-md-12">
                <label>Video Preview</label>

                <input type="file" class="form-control" name="featured_video" value="{{old('featured_video')}}" placeholder="Featured Video">
                @error('featured_video') <span class="error my-2 text-danger">{{ $message }}</span> @enderror
                <div class="my-3 progress">
                    <div class="inbar progress-bar"></div>
                    <div class="inpercent" style="position:absolute;left:50%;color:black">0%</div>
                </div>
              </div>
             
          <div class="col-md-12 my-3">
            <a href="{{route('courses')}}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save courses</button>
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