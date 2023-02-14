@extends('global.template')
@section('contents')


<section style="background-image: url('{{asset('assets/img/home4.jpg')}}')" class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
        
      <div class="row justify-content-center">
        
        <div class=" col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
            
              {{-- <span class="d-none d-lg-block text-dark">Elearning</span> --}}
            </a>
          </div><!-- End Logo -->

          <div class="card animate__animated animate__zoomIn animate__delay-2s mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Login to your account</h5>
                <p class="text-center small">Explore thousands thousands of of best bootscamp around the globe</p>
              </div>

              <form class="row g-3 needs-validation" action="{{route('signin')}}" method="POST">
                @csrf
                 
                <div class="col-12">
                  <label for="yourEmail" class="form-label">Your Email</label>
                  <input type="email" name="email" value="{{old('email')}}" class="form-control" id="yourEmail">
                  @error('email')<p class="text-danger my-2">{{$message}}</span>@enderror
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="yourPassword" value="{{old('password')}}" >
                  @error('password')<p class="text-danger my-2">{{$message}}</span>@enderror
                </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Sign In</button>
                </div>
                <div class="col-12">
                  <p class="small mb-0">Don't  have an account? <a href="{{route('register')}}">Create an account</a></p>
                </div>
              </form>

            </div>
          </div>

  </section>

@endsection