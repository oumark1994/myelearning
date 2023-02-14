@extends('global.template')
@section('contents')
@include('global.header')  
  <!-- Header Start --> 
<div class="container-fluid py-5 mb-5 page-header" style="background-image:url({{asset('images/'.$course->featured_image)}})">
<div class="container py-5">
        <div class="row ">
            <div class="col-lg-7 wow zoomOut" data-wow-delay="0.1s" style="min-height:400px;">
                <div class="position-relative h-100">
                     <img class="img-fluid position-absolute w-100 h-100" src="{{asset('images/'.$course->featured_image)}}" alt="" style="object-fit: cover;">
                     <img class="play-btn" onclick="playVideo('{{asset('videos/'.$course->featured_video)}}')" src="{{asset('assets/frontend/img/play1.png')}}" onclick="('videos/video.mp4')"/>

                </div>
            </div>
            <div class="col-lg-5 p-2 wow zoomOut bg-e bg-white" data-wow-delay="0.3s">
                
                <p class="mb-4 p-3 text-primary">{{$course->title}}</p>
                <p class="mb-4 mx-3 px-2">Lessons<span class="ps-1">({{count($lessons)}})</span></p>
                <div class="row gy-2 gx-4 mb-4">
                    @foreach ($lessons as $lesson)
                    @foreach ($videos as $video)
<div class="col-sm-10 lessons bg-default">
    @if ($lesson->id === $video->lesson_id)
    <p class="mb-0" onclick="playVideo('{{asset('videos/'.$video->video)}}','{{$lesson->title}}')"><i class="fa fa-play text-danger  mx-4" id="play"></i>{{$lesson->title}}<span class="px-2">{{$video->duration}}</span></p>
    @endif
    </div> 
   
    @endforeach
    @endforeach               
    </div>
    </div>
            {{-- <div class="col-lg-12 wow zoomOut bg-e" data-wow-delay="0.3s"> --}}
                <div class="videoPlayer  mt-4" id="videoPlayer">
    
                    <div class="card p-5">
                    <div class="card-title py-3" ><p class="mx-3 my-1 " id="title"></p></div>
                        <div class="card-body">
                    <video width="100%" controls autoplay id="myVideo">
                        <source src="videos/video.mp4">
                    </video>
                    <p onclick="stopVideo()" class="close-btn text-danger">x</p>
                    {{-- <img onclick="stopVideo()" src="images/close.png" class="close-btn"> --}}
                    </div>
                </div>
                </div>
        {{-- </div>   --}}
    </div>
<div class="row g-5 my-3">
    <div class="col-lg-12 wow zoomOut" data-wow-delay="0.1s" style="min-height: 400px;">
    <div class="card ">
        <div class="card-body p-4">
          {{-- <h5 class="card-title">Pills Tabs</h5> --}}

          <!-- Pills Tabs -->
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">About</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Reviews</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Discussion</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-project" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Projects & Resources</button>
              </li>
          </ul>
          <div class="tab-content pt-2" id="myTabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
<h3>About this class</h3>
<div class="row ">
<div class="col-lg-12 wow zoomOut" data-wow-delay="0.1s" style="min-height: 400px;">
    <h4>{{$course->primary_subject}}</h4>
   <p class="py-4">Description:
    {{$course->description}}
   </p>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
</div>
<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
            </div>
            <div class="tab-pane fade" id="pills-project" role="tabpanel" aria-labelledby="contact-tab">
                Project animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
             </div>
          </div><!-- End Pills Tabs -->
        </div>
      </div>
    </div>
</div>
</div>
</div>
<script>
    var videoplayer = document.getElementById("videoPlayer");
    var myVideo = document.getElementById("myVideo");
    var title = document.getElementById("title");
    // function stopVideo(){
    //     videoplayer.style.display="none"
    //     myVideo.pause();
    // }
    function playVideo(file,lessontitle){
        myVideo.src = file;
        videoplayer.style.display="block"
        title.textContent=lessontitle
    }
    function stopVideo(){
            videoplayer.style.display="none"
            myVideo.pause();
        }
</script>
<!-- Team Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow zoomOut" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
            <h1 class="mb-5">Expert Instructors</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow zoomOut" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomOut" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomOut" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow zoomOut" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Team End -->
@endsection