
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MAXIMUM IMPACT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  {{-- <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script> --}}
  <!-- Vendor CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
 
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
     <!-- frontend styles -->
     <link href="{{asset('assets/frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
     <link href="{{asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
 
     <!-- Customized Bootstrap Stylesheet -->
 
     <!-- Template Stylesheet -->
     <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">
     @livewireStyles
</head>

<body>

  <!-- ======= Header ======= -->
@yield('contents')
<!-- ======= Footer ======= -->

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
      <div class="row g-5">
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-3">Quick Link</h4>
              <a class="btn btn-link" href="">About Us</a>
              <a class="btn btn-link" href="">Contact Us</a>
              <a class="btn btn-link" href="">Privacy Policy</a>
              <a class="btn btn-link" href="">Terms & Condition</a>
              <a class="btn btn-link" href="">FAQs & Help</a>
          </div>
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-3">Contact</h4>
              <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1300, Spintex Accra,Ghana</p>
              <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+233000000000</p>
              <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
              <div class="d-flex pt-2">
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-3">Gallery</h4>
              <div class="row g-2 pt-2">
                  <div class="col-4">
                      <img class="img-fluid bg-light p-1" src="{{asset('assets/frontend/img/course-1.jpg')}}" alt="">
                  </div>
                  <div class="col-4">
                      <img class="img-fluid bg-light p-1" src="{{asset('assets/frontend/img/course-2.jpg')}}" alt="">
                  </div>
                  <div class="col-4">
                      <img class="img-fluid bg-light p-1" src="{{asset('assets/frontend/img/course-3.jpg')}}" alt="">
                  </div>
                  <div class="col-4">
                      <img class="img-fluid bg-light p-1" src="{{asset('assets/frontend/img/course-2.jpg')}}" alt="">
                  </div>
                  <div class="col-4">
                      <img class="img-fluid bg-light p-1" src="{{asset('assets/frontend/img/course-3.jpg')}}" alt="">
                  </div>
                  <div class="col-4">
                      <img class="img-fluid bg-light p-1" src="{{asset('assets/frontend/img/course-1.jpg')}}" alt="">
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <h4 class="text-white mb-3">Newsletter</h4>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative mx-auto" style="max-width: 400px;">
                  <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                  <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
              </div>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="copyright">
          <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                  &copy; <a class="border-bottom" href="#">MAXIMUM IMPACT</a>, <span class="text-white">All Right Reserved.</span>

                  <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                  <span class="text-white"> Designed By </span><a class="border-bottom" href="https://www.etsonow.com">Etso Now</a>
              </div>
              <div class="col-md-6 text-center text-md-end">
                  <div class="footer-menu">
                      <a href="">Home</a>
                      <a href="">Cookies</a>
                      <a href="">Help</a>
                      <a href="">FQAs</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
 

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <!-- JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets/frontend/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <!-- Template Javascript -->
  <script src="{{asset('assets/frontend/js/main.js')}}"></script>
  @livewireScripts
  <script>
    $(document).ready(function(){
      var bar = $('.bar');
      var percent = $('.percent');
        $("#upload").click(function(){
         $('form').ajaxForm({
        beforeSend:function(){
          var percentVal='0%';
          bar.width(percentVal);
          percent.html(percentVal);
        },
        uploadProgress:function(event,position,total,percentComplete){
          var percentVal=percentComplete+'%';
          bar.width(percentVal);
          percent.html(percentVal);
        },
        complete:function(){
          window.location.href="{{url('/videolessons')}}";
        }
      });

});
     
      
    });
  </script>

  {{-- <script>
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
  </script> --}}

</body>

</html>