@extends('global.template')
@section('contents')
<section style="background-image: url('{{asset('assets/img/home6.jpg')}}')" class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
            
            
            </a>
          </div><!-- End Logo -->

          <div class="card animate__animated animate__zoomIn animate__delay-2s mb-3 mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                
                <p class="text-center small">Create an account to have access to best online courses</p>
              </div>

              <form class="row g-3 needs-validation" novalidate action="{{route('signup')}}" method="post">
                @csrf
                <div class="col-12">
                    <label for="yourName" class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" value="{{old('firstname')}}"  >
                    @error('firstname')<p class="text-danger my-2">{{$message}}</span>@enderror
                  </div>
                  <div class="col-12">
                    <label for="yourName" class="form-label">First Name</label>
                    <input type="text" name="lastname" class="form-control" value="{{old('lastname')}}"  >
                    @error('lastname')<p class="text-danger my-2">{{$message}}</span>@enderror                  </div>

                <div class="col-12">
                  <label for="yourEmail" class="form-label">Email</label>
                  <input type="email" name="email" value="{{old('email')}}" class="form-control" >
                  @error('email')<p class="text-danger my-2">{{$message}}</span>@enderror 
                </div>

                <div class="col-12">
                  <label for="yourPassword" class="form-label">Password</label>
                  <input type="password" name="password" value="{{old('password')}}"  class="form-control" >
                  @error('password')<p class="text-danger my-2">{{$message}}</span>@enderror 
                  </div>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Create Account</button>
                </div>
                <div class="col-12">
                  <p class="small mb-0">Already have an account? <a href="{{route('login')}}">Log in</a></p>
                </div>
              </form>

            </div>
          </div>

  </section>

@endsection