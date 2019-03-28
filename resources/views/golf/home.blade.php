@extends('golf.app')
@section('pagecontent')

<!--End header-->
    <div class="slider w-100">
      <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel"> 
        <div class="carousel-inner">
          <div class="carousel-item active"><img class="d-block w-100" src="{{asset('golf/images/slides/img1.jpg')}}" alt="">
            <div class="container">
              <h2>WELCOME TO GOLF HOSPITAL</h2>
              <p>We' ve Built a Long Standing Relationship Based On Trust</p><a href="#">Read More</a>
            </div>
          </div>
          <div class="carousel-item"><img class="d-block w-100" src="{{asset('golf/images/slides/img2.jpg')}}" alt="">
            <div class="container">
              <h2>WELCOME TO GOLF HOSPITAL</h2>
              <p>We' ve Built a Long Standing Relationship Based On Trust</p><a href="#">Read More</a>
            </div>
          </div>
          <div class="carousel-item"><img class="d-block w-100" src="{{asset('golf/images/slides/img3.jpg')}}" alt="">
            <div class="container">
              <h2>WELCOME TO GOLF HOSPITAL</h2>
              <p>We' ve Built a Long Standing Relationship Based On Trust</p><a href="#">Read More</a>
            </div>
          </div>
        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"></a>
      </div>
      <nav class="container services-fund"><a class="innerdoctor" href="#"><img src="{{asset('golf/images/departments.png')}}" alt="">
          <h3>Departments</h3>
          <p>The Backbone of our Clinic</p></a><a class="innerdoctor" href="#"><img src="{{asset('golf/images/clinics.png')}}" alt="">
          <h3>Out Patient Clinics</h3>
          <p>A list of all available</p></a><a class="innerdoctor" href="#"><img src="{{asset('golf/images/department.png')}}" alt="">
          <h3>Find a Doctor</h3>
          <p>All our staff by department</p></a><a class="innerdoctor" href="#"><img src="{{asset('golf/images/request.png')}}" alt="">
          <h3>Request an Appointment</h3>
          <p>Call us or fill in a form</p></a></nav>
    </div><!-- Start Section About -->
    <section class="about w-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 aboutiner">
            <h1 class="titlemax">WELCOME TO <span>GOLF HOSPITAL</span></h1>
            <h2 class="titlemin">We' ve built a long standing relationship based on trust</h2>
            <p>We are committed to provide comprehensive treatment in the medical field emphasizing that patient is the most important element in our system.We deliver high standards of medical care, utilizing the best technology, continuous innovation and cared by dedicated and qualified professionals ensuring complete patient satisfaction to achieve a bench mark in patient care with competence.</p><a class="bottom" href="#">Read More</a>
          </div>
          <div class="col-sm-6 abouttow">
            <div class="row">
                <a class="col-sm-12 aboutimg" href="#"><img class="w-100" src="{{asset('golf/images/about1.jpg')}}" alt=""></a>
                <a class="col-sm-6 aboutimg" href="#"><img class="w-100" src="{{asset('golf/images/about2.jpg')}}" alt=""></a>
                <a class="col-sm-6 aboutimg" href="#"><img class="w-100" src="{{asset('golf/images/about3.jpg')}}" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Section About -->         
    <section class="medical w-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 medicalfte">
            <h2>MEDICAL DEPARTMENTS</h2>
            <div class="row">
              <div class="col-sm-4 medbox"><a class="w-100" href="#"> <i class="medical-icon-i-neurology"></i>
                  <h3>Neurology Department</h3>
                  <p>Our Orthopedic department offers</p></a></div>
              <div class="col-sm-4 medbox"><a class="w-100" href="#"> <i class="medical-icon-i-kidney"></i>
                  <h3>Urology Department</h3>
                  <p>Our Orthopedic department offers some</p></a></div>
              <div class="col-sm-4 medbox"><a class="w-100" href="#"> <i class="medical-icon-i-ambulance"></i>
                  <h3>ER & Ambulance </h3>
                  <p>Our Orthopedic department offers some</p></a></div>
              <div class="col-sm-4 medbox"><a class="w-100" href="#"> <i class="medical-icon-i-imaging-root-category"></i>
                  <h3>Orthopedic Department</h3>
                  <p>Our Orthopedic department offers some </p></a></div>
              <div class="col-sm-4 medbox"><a class="w-100" href="#"> <i class="medical-icon-i-cardiology"></i>
                  <h3>Cardiology Department</h3>
                  <p>Our Orthopedic department offers some</p></a></div>
              <div class="col-sm-4 medbox"><a class="w-100" href="#"> <i class="medical-icon-i-laboratory"></i>
                  <h3>Laboratory & Blood Bank</h3>
                  <p>Our Orthopedic department offers some       </p></a></div>
            </div>
          </div>
          <div class="col-sm-4 medicalfte">
            <h2>Latest News</h2>
            <div class="panel panel-default">
              <div class="panel-body">
                <ul class="newsmin">
                  <li class="news-item w-100"><a class="thumb" href="#"><img src="{{asset('golf/images/about3.jpg')}}" alt="">
                      <div class="textnews"> 
                        <h4>New Therapy Helps You  </h4>
                        <p>Our Orthopedic department offers some of the most advanced   </p>
                      </div></a></li>
                  <li class="news-item w-100"><a class="thumb" href="#"><img src="{{asset('golf/images/about3.jpg')}}" alt="">
                      <div class="textnews"> 
                        <h4>New Therapy Helps You  </h4>
                        <p>Our Orthopedic department offers some of the most advanced   </p>
                      </div></a></li>
                  <li class="news-item w-100"><a class="thumb" href="#"><img src="{{asset('golf/images/about3.jpg')}}" alt="">
                      <div class="textnews"> 
                        <h4>New Therapy Helps You  </h4>
                        <p>Our Orthopedic department offers some of the most advanced   </p>
                      </div></a></li>
                  <li class="news-item w-100"><a class="thumb" href="#"><img src="{{asset('golf/images/about3.jpg')}}" alt="">
                      <div class="textnews"> 
                        <h4>New Therapy Helps You  </h4>
                        <p>Our Orthopedic department offers some of the most advanced   </p>
                      </div></a></li>
                  <li class="news-item w-100"><a class="thumb" href="#"><img src="{{asset('golf/images/about3.jpg')}}" alt="">
                      <div class="textnews"> 
                        <h4>New Therapy Helps You  </h4>
                        <p>Our Orthopedic department offers some of the most advanced   </p>
                      </div></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Section medical --> 
    <section class="plan w-100">
      <div class="overlay"></div>
      <div class="container">  
        <h4>NEED A PERSONAL HEALTH PLAN?</h4>
        <p>Wait For Our New Customized Plans Soon … </p><a class="fas fa-link botplan" href="#"> </a><!-- End Section Plan --> 
      </div>
    </section>
    <section class="patient w-100">   
      <div class="container">
        <h2 class="text-center"> OUT PATIENT</h2>
        <p class="text-center"> We cover a big variety of medical services</p>
        <div class="row">
          <div class="col-sm-3 planbox"><a class="planlink w-100" href="#"><img src="{{asset('golf/images/planlink.jpg')}}" alt="">
              <h4>General Surgery</h4></a></div>
          <div class="col-sm-3 planbox"><a class="planlink w-100" href="#"><img src="{{asset('golf/images/planlink.jpg')}}" alt="">
              <h4>General Surgery</h4></a></div>
          <div class="col-sm-3 planbox"><a class="planlink w-100" href="#"><img src="{{asset('golf/images/planlink.jpg')}}" alt="">
              <h4>General Surgery</h4></a></div>
          <div class="col-sm-3 planbox"><a class="planlink w-100" href="#"><img src="{{asset('golf/images/planlink.jpg')}}" alt="">
              <h4>General Surgery</h4></a></div>
          <div class="text-center w-100"><a class="bottom" href="#"><i class="far fa-clock"></i>know Working Hours   </a></div>
        </div><!-- End Section patient -->
      </div>
    </section>
    <section class="doctors w-100">
      <div class="container">
        <h2 class="text-center"> DOCTORS</h2>
        <p class="text-center"> Find a doctor and details about them</p>
        <div class="doctorsslider">
          <div>
            <div class="doc-img w-100"><img src="{{asset('golf/images/doc-img.jpg')}}" alt="">
              <div class="inner-soch">
                <nav class="social"> <a class="fab fa-facebook-f icon-facebook" href="#" title="Facebook"></a><a class="fab fa-twitter icon-twitter" href="#" title="Twitter"></a><a class="fab fa-linkedin-in icon-linkedin" href="#" title="linked in"></a></nav>
              </div>
            </div><a class="titlename w-100" href="#">DR. AHMED EL-NABEEL</a>
            <p class="des w-100">General Surgery</p>
          </div>
          <div>
            <div class="doc-img w-100"><img src="{{asset('golf/images/doc-img2.jpg')}}" alt="">
              <div class="inner-soch">
                <nav class="social"> <a class="fab fa-facebook-f icon-facebook" href="#" title="Facebook"></a><a class="fab fa-twitter icon-twitter" href="#" title="Twitter"></a><a class="fab fa-linkedin-in icon-linkedin" href="#" title="linked in"></a></nav>
              </div>
            </div><a class="titlename w-100" href="#">DR. AHMED EL-NABEEL</a>
            <p class="des w-100">General Surgery</p>
          </div>
          <div>
            <div class="doc-img w-100"><img src="{{asset('golf/images/doc-img3.jpg')}}" alt="">
              <div class="inner-soch">
                <nav class="social"> <a class="fab fa-facebook-f icon-facebook" href="#" title="Facebook"></a><a class="fab fa-twitter icon-twitter" href="#" title="Twitter"></a><a class="fab fa-linkedin-in icon-linkedin" href="#" title="linked in"></a></nav>
              </div>
            </div><a class="titlename w-100" href="#">DR. AHMED EL-NABEEL</a>
            <p class="des w-100">General Surgery </p>
          </div>
          <div>
            <div class="doc-img w-100"><img src="{{asset('golf/images/doc-img4.jpg')}}" alt="">
              <div class="inner-soch">
                <nav class="social"> <a class="fab fa-facebook-f icon-facebook" href="#" title="Facebook"></a><a class="fab fa-twitter icon-twitter" href="#" title="Twitter"></a><a class="fab fa-linkedin-in icon-linkedin" href="#" title="linked in"></a></nav>
              </div>
            </div><a class="titlename w-100" href="#">DR. AHMED EL-NABEEL</a>
            <p class="des w-100">General Surgery</p>
          </div>
          <div>
            <div class="doc-img w-100"><img src="{{asset('golf/images/doc-img3.jpg')}}" alt="">
              <div class="inner-soch">
                <nav class="social"> <a class="fab fa-facebook-f icon-facebook" href="#" title="Facebook"></a><a class="fab fa-twitter icon-twitter" href="#" title="Twitter"></a><a class="fab fa-linkedin-in icon-linkedin" href="#" title="linked in"></a></nav>
              </div>
            </div><a class="titlename w-100" href="#">DR. AHMED EL-NABEEL</a>
            <p class="des w-100">General Surgery         </p>
          </div>
        </div>
      </div><!-- End Section Doctors -->
    </section>

@endsection