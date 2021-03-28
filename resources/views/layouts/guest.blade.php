<!--
=========================================================
Material Kit - v2.0.7
=========================================================

Product Page: https://www.creative-tim.com/product/material-kit
Copyright 2020 Creative Tim (https://www.creative-tim.com/)

Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('guest/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('guest/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dr Bora Siva Kumar Reddy
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset('guest/css/material-kit.css?v=2.0.7')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('guest/demo/demo.cs')}}s" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-primary  fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
          Logo </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href=" https://twitter.com/sivareddybora" target="_blank" data-original-title="Follow me on Twitter" rel="nofollow">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/siva.reddy22" target="_blank" data-original-title="Like me on Facebook" rel="nofollow">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.linkedin.com/in/bora-siva-reddy/" target="_blank" data-original-title="Follow me on Instagram" rel="nofollow">
              <i class="fa fa-instagram"></i>
            </a>
          </li> -->

          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.linkedin.com/in/bora-siva-reddy/" target="_blank" data-original-title="Follow me on Instagram" rel="nofollow">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="main">
        @yield('content')
    
  </div>


<?php 
    $tags = DB::table('tags')->select('name','color')->get();
    $categories = DB::table('categories')->select('name')->get();
    $team = DB::table('users')->select('name')->get();
    // print_r($tags);

?>

  <footer class="footer footer-white footer-big">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <h5>Team</h5>
                    <ul class="links-vertical">
                        @forelse ($team as $te)
                            <li>
                               <a href="#">
                                    {{$te->name}}
                                </a>
                            </li>
                        @empty
                            <li>
                                <span >No Categories Found.</span>
                            </li>
                        @endforelse
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Categories</h5>
                    <ul class="links-vertical">
                        @forelse ($categories as $cat)
                            <li>
                               <a href="">
                                    {{$cat->name}}
                                </a>
                            </li>
                        @empty
                            <li>
                                <span >No Categories Found.</span>
                            </li>
                        @endforelse
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Tags</h5>
                    <ul class="links-horizontal">

                            @forelse ($tags as $tag)
                                <li>
                                    <a style="padding:1px" href="#"><span style="background-color: {{$tag->color}}" class="badge badge-pill">{{$tag->name}}</span></a>
                                </li>
                            @empty
                                <li>
                                    <span >No tag found.</span>
                                </li>
                            @endforelse

                            
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Subscribe to Newsletter</h5>
                    <p>
                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about
                        this.
                    </p>
                    <form class="form form-newsletter" method="post" action="#" id="newsletter">

                        <input style="display:none" name="newsletter" value="1">
                                                <div class="form-group bmd-form-group">
                            <input type="email" class="form-control" name="newsletter_email" placeholder="Your Email...">
                        </div>
                        <button type="submit" class="btn btn-primary btn-just-icon" name="button">
                            <i class="material-icons">mail</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
 <!--        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com" target="_blank">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="https://creative-tim.com/presentation">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="https://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
                <li>
                    <a href="https://www.updivision.com" target="_blank">
                        UPDIVISION
                    </a>
                </li>
            </ul>
        </nav> -->
        <ul class="social-buttons">
            <li>
                <a href=" https://twitter.com/sivareddybora" class="btn btn-just-icon btn-link btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/siva.reddy22" class="btn btn-just-icon btn-link btn-facebook">
                    <i class="fa fa-facebook-square"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/bora-siva-reddy/" class="btn btn-just-icon btn-link btn-facebook">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
     <!--        <li>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-google">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-youtube">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </li> -->
        </ul>
        <div class="copyright pull-center">
            Copyright ©
            <script>
                document.write(new Date().getFullYear()) 
            </script>2021<a href="#" > DR. Bora Siva Kumar Reddy </a> &amp;  All Rights Reserved.
        </div>
    </div>
</footer>



  <!--   Core JS Files   -->
  <script src="{{asset('guest/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('guest/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('guest/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('guest/js/plugins/moment.min.js')}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{asset('guest/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('guest/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('guest/js/material-kit.js?v=2.0.7')}}" type="text/javascript"></script>


  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60603d38067c2605c0bcfc16/1f1ruuang';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>