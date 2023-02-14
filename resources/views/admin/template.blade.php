
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

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>Maximum Impac</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://www.etsonow.com/">Etsonow</a>
  </div>
</footer><!-- End Footer -->
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
  <script type="text/javascript">
    $(document).ready(function () {
      // var subcategory = $('#inputSubcategory');
        $('#inpuCategory').on('change',function(){
            var category_id = this.value;
            $.ajax({
                url:"{{route('subcategory')}}",
                data:{
                  category_id:$(this).val()
                },
                success: function (res) {
                    $('#inputSubcategory').html('<option value="">Select Subcategory</option>');
                    $.each(res, function (key, value) {
                      $('#inputSubcategory').append('<option value="'+ value.id + '">' + value.title + '</option>');
                    });
                }
            });
        });      
    });
</script>
{{-- <script type="text/javascript">
  $(document).ready(function () {
    // var subcategory = $('#inputSubcategory');
      $('#inputcourse').on('change',function(){
          var course_id = this.value;
          $.ajax({
              url:"{{route('getlesson')}}",
              data:{
                course_id:$(this).val()
              },
              success: function (res) {
                  $('#lesson_id').html('<option value="">Select Lessons</option>');
                  $.each(res, function (key, value) {
                    $('#lesson_id').append('<option value="'+ value.id + '">' + value.title + '</option>');
                  });
              }
          });
      });      
  });
</script>
<script> --}}
  {{-- // $(document).ready(function(){
  //   var bar = $('.bar');
  //   var percent = $('.percent');
  //   $('form').ajaxForm({
  //     beforeSend:function(){
  //       var percentVal='0%';
  //       bar.width(percentVal);
  //       percent.html(percentVal);
  //     },
  //     uploadProgress:function(event,position,total,percentComplete){
  //       var percentVal=percentComplete+'%';
  //       bar.width(percentVal);
  //       percent.html(percentVal);
  //     },
  //     complete:function(){
  //       alert('File uploaded successfully');
  //        window.location.href="{{url('/videos')}}"
  //     }
  //   });
  // });
</script> --}}

  <script>

    window.addEventListener('close-modal', event => {
    
       
      $("#verticalycentered").modal('hide');
      window.location.reload()
    
    })
    
    </script>
     <script>
      $(document).ready(function(){
        var bar = $('.bar');
        var percent = $('.percent');
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