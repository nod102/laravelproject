<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Lorem Pugjs')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>Golf Hospital</title>
    <link rel="stylesheet" href="{{asset('golf/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('golf/css/home.css')}}">
    <!--link(rel='stylesheet',href='css/home-rtl.css')-->
    <link rel="stylesheet" href="{{asset('golf/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('golf/css/wfmi-style.css')}}">
    <link rel="stylesheet" href="{{asset('golf/css/daterangepicker.css')}}">
    <link rel="icon" href="{{asset('golf/images/favicon.png')}}" type="image/png">
    <script src="{{asset('golf/js/jquery.js')}}"></script>
    <script src="{{asset('golf/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('golf/js/newsbox.min.js')}}"></script>
    <script src="{{asset('golf/js/slick.min.js')}}"></script>
    <script src="{{asset('golf/js/moment.js')}}"></script>
    <script src="{{asset('golf/js/daterangepicker.js')}}"></script>
    <script src="{{asset('golf/js/plugin.js')}}"></script>
  </head>
  <body>
    <header class="header w-100">
      <div class="minheader w-100">
        <div class="container">
          <nav class="social"> <a class="fab fa-facebook-f icon-facebook" href="#" title="Facebook"></a><a class="fab fa-twitter icon-twitter" href="#" title="Twitter"></a><a class="fab fa-google-plus-g icon-gplus" href="#" title="Google-plus"></a><a class="fab fa-instagram icon-instagram" href="#" title="Instagram"></a><a class="fab fa-whatsapp icon-whatsapp" href="#" title="Whatsapp"></a></nav>
          <nav class="navmenu"><a href="{{asset('golf/request an appointment.html')}}">request an appointment</a><a href="{{asset('golf/faq.html')}}">faq</a><a href="{{asset('golf/عربى.html')}}">عربى</a>
          </nav>
        </div>
      </div>
      <div class="container">
        <div class="logo"><a href="#"> <img src="{{asset('golf/images/logo.png')}}"></a></div>
        <div id="cssmenu">
          <div id="head-mobile"></div>
          <div class="button"> </div>
          <ul>
            <li><a class="active" href="#">home </a></li>
            <li><a href="#">about us</a>
              <ul>
                <li><a href="#">vision, Mission , values</a></li>
                <li><a href="#">CEO’s message</a></li>
                <li><a href="#">Management Team</a></li>
                <li><a href="#">Facilities</a></li>
              </ul>
            </li>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">Departments</a></li>
            <li><a href="#">Info</a>
              <ul>
                <li><a href="#">Appointment Booking</a></li>
                <li><a href="#">Fees , Insurance</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">scientific articles</a></li>
                <li><a href="#">Videos</a></li>
              </ul>
            </li>
            <li><a href="#">Out Patient Clinics</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
    </header>

    @yield('pagecontent')

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 boxfot text-center"><img src="{{asset('golf/images/logo.png')}}">
            <p class="text">We are committed to provide comprehensive treatment in the medical field emphasizing that patient is the most important element in our system.</p>
          </div>
          <div class="col-md-4 boxfot"> 
            <h6 class="title">site links</h6>
            <nav class="navmenu"><a href="{{asset('golf/home.html')}}">home</a><a href="{{asset('golf/vision, Mission , values.html')}}">vision, Mission , values</a><a href="{{asset('golf/CEO’s message.html')}}">CEO’s message</a><a href="{{asset('golf/Management Team.html')}}">Management Team</a><a href="{{asset('golf/Facilities.html')}}">Facilities</a><a href="{{asset('golf/news.html')}}">news</a><a href="{{asset('golf/faq.html')}}">faq</a><a href="{{asset('golf/Careers.html')}}">Careers</a><a href="{{asset('golf/Videos.html')}}">Videos</a><a href="{{asset('golf/Doctors.html')}}">Doctors</a><a href="{{asset('golf/Out Patient Clinics.html')}}">Out Patient Clinics</a><a href="{{asset('golf/Contact us.html')}}">Contact us</a>
            </nav>
          </div>
          <div class="col-md-4 boxfot"> 
            <h6 class="title">Contact us</h6>
            <div class="textfooter"><i class="fas fa-map-marker-alt"></i>
              <p><b>Address</b><br>Nabil El-Wakad - Ard El- Golf - Heliopolis</p>
            </div>
            <div class="textfooter"><i class="fas fa-phone"></i>
              <p><b>phone</b><br>(+20) 2415-3922</p>
            </div>
            <div class="textfooter"><i class="fas fa-envelope"></i>
              <p><b>email</b><br><a href="#"> info@gihegypt.com       </a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="leftprif w-100"> 
        <div class="container">
          <h6>Follow Us</h6>
          <nav class="social"> <a class="fab fa-facebook-f icon-facebook" href="#" title="Facebook"></a><a class="fab fa-twitter icon-twitter" href="#" title="Twitter"></a><a class="fab fa-google-plus-g icon-gplus" href="#" title="Google-plus"></a><a class="fab fa-instagram icon-instagram" href="#" title="Instagram"></a><a class="fab fa-whatsapp icon-whatsapp" href="#" title="Whatsapp"> </a></nav>
        </div>
      </div>
      <div class="copyright w-100"> 
        <div class="container">
          <p> Copyright © 2019 all rights reserved</p><a href="#"><i class="fas fa-mobile-alt"></i>Emergency Line <br>19552</a>
        </div>
      </div><a class="fa fa-angle-up scrollToTop" href="#"></a>
    </footer>
  </body>
</html>