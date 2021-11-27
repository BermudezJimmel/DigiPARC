<?php

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userSubject = $_POST['subject'];
    $userMessage = $_POST['message'];

    $to = "jimmel.bermudez@globaltronics.net";
    $body = "";

    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Message: ".$userMessage. "\r\n";

    mail($to, $userSubject, $body);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DigiPARC - revert please</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DigiPARC - v2.2.1
  * Template URL: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center justify-content-between">
          <!-- <h1 class="logo"><a href="index.html">Digi<span style="color: orange;">PARC</span></a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.html" class="logo"><img src="assets/img/DigiparcLOGO.png" alt="" class="img-fluid"></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <!-- <li><a href="#about">About</a></li> -->
              <li><a href="#services">About</a></li>
              <li><a href="#pricing">Studio</a></li>
              <li><a href="#portfolio">Events</a></li>
              
              <!-- <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="drop-down"><a href="#">Deep Drop Down</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li> -->
              <!-- <li><a href="#contact">Contact</a></li> -->

            </ul>
          </nav><!-- .nav-menu -->
          <a href="#contact" class="get-started-btn scrollto">Contact Us</a>
          <!-- <a href="#services" class="get-started-btn scrollto">Get Started</a> -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <h1>The first “Truly Digital Events Place” in the country.</h1>
          <a href="#services" class="get-started-btn scrollto">Get Started</a>
          <!-- <h2>We are team CREATIVES</h2> -->
          <!-- <a href="https://www.youtube.com/watch?v=q2cnGVwM9zI&t=1s" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a> -->
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>EVENT SPACES GOING DIGITAL: <br> YOUR NEWEST VENUE UNDER THE NEW NORMAL</h2>
          <p>Globaltronics and The Performing Arts and Recreation Center (PARC) Foundation strengthened their partnership by transforming several of the latter’s spaces into a one-stop digital events place for businesses, individuals, artists, families, and many more. </p>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <center>
                  <div class="icon"><img src="/assets/img/icons/IMPLEMENTED SAFETY PROTOCOLS.png" alt="" style="padding-right: 4px;"></div>
              </center>
              <h4><a href="">IMPLEMENTED SAFETY PROTOCOLS</a></h4>
              <p>With our newest online venue, more industries can now thrive under the new normal while reassuring their health and safety.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bx-file"></i></div> -->
              <center>
                <div class="icon"><img src="/assets/img/icons/STATE-OF-THE-ART DIGITAL DISPLAYS AND AUDIOVISUAL EQUIPMENT.png" alt=""></div>
              </center>
              <h4><a href="">STATE-OF-THE-ART DIGITAL DISPLAYS AND AUDIOVISUAL EQUIPMENT</a></h4>
              <p>Entertain your virtual attendees with the use of our vibrant and high-quality digital solutions combined with amazing audiovisual equipment for a smooth flow of production.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <center>
                <div class="icon"><img src="/assets/img/icons/HIGHLY SKILLED CREATIVE AND TECHNICAL PROFESSIONALS-2.png" alt="" style="max-width: 120px;"></div>
              </center>
              
              <!-- <div class="icon"><i class="bx bx-tachometer"></i></div> -->
              <h4><a href="">HIGHLY SKILLED CREATIVE AND TECHNICAL PROFESSIONALS</a></h4>
              <p>We have professional creative artists who can exemplify your ideas into an amazing virtual project.</p>
              <br>
              <p>We also have a skilled production technical operator who can support you in configuring, installing, and maintaining technical systems.</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <center>
                <div class="icon"><img src="/assets/img/icons/MULTI-PURPOSE ROOMS PERFECT FOR PRE AND POST-PRODUCTION.png" alt=""></div>
              </center>
              
              <!-- <div class="icon"><i class="bx bx-world"></i></div> -->
              <h4><a href="">MULTI-PURPOSE ROOMS PERFECT FOR PRE AND POST-PRODUCTION</a></h4>
              <p>Aside from the digital spaces provided, DigiPARC can also facilitate your preparations before your shoot day with our multifunctional rooms close to digital spaces.</p>
              <br>
              <p>You can do pre-production activities like make-up, script study, meetings, storyboarding, and many more.</p>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->

     <!-- ======= MAIN SPACES Section ======= -->
     <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>MAIN SPACES</h2>
          <p class="bold">DigiPARC is now serving your digital needs for both corporate and private events like meetings, product launches, webinars, live sessions, event performances, parties.</p>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6">
            <div class="box">
              <img src="/assets/img/Blackbox/BB 1024x768_1632524850.png" alt="">
              <h3>BLACKBOX</h3>
              <p>Perfect for your upcoming online events.  Its dark and light ambiance brings your event to a whole new level.</p>
              <!-- <h4><sup>$</sup>0<span> / month</span></h4> -->
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
              <div class="btn-wrap">
                <a data-toggle="modal" data-target="#BlackboxModal" href="#" class="btn-buy">More Details</a>
              </div>
            </div>
          </div>


          <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <img src="/assets/img/gallery/Gallery 1024x768_1632524850.png" alt="">
              <h3>GALLERY</h3>
              <p>DigiPARC Gallery offers you an “L” shaped LED with three (3) iPosters and an 84” PHILIPS screen.</p>
              <!-- <h4><sup>$</sup>29<span> / month</span></h4> -->
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul> -->
              <div class="btn-wrap">
                <a data-toggle="modal" data-target="#GalleryModal" href="#" class="btn-buy">More Details</a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div> -->

        </div>

        <div class="row mt-4">

          <div class="col-lg-6 col-md-6">
            <div class="box">
              <img src="/assets/img/creativity/CREATIVITY-HALL-1024x768-(FRONT) (1).png" alt="">
              <h3>CREATIVITY HALL</h3>
              <p>Equipped with a "U" shaped LED Wall, a stunning floor LED, and large teleprompter screens for your scripts and guides.</p>
              <!-- <h4><sup>$</sup>0<span> / month</span></h4> -->
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
              <div class="btn-wrap">
                <a data-toggle="modal" data-target="#CreativityhallModal" href="#" class="btn-buy">More Details</a>
              </div>
            </div>
          </div>


          <div class="col-lg-6 col-md-6">
            <div class="box">
              <img src="/assets/img/whitebox/WHITEBOX-1024x768-(Front) new1 (1) (1).png" alt="">
              <h3>WHITEBOX</h3>
              <p>You can also maximize your experience with our White Box studio for your photography or videography needs.</p>
              <!-- <h4><sup>$</sup>0<span> / month</span></h4> -->
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
              <div class="btn-wrap">
                <a data-toggle="modal" data-target="#WhiteboxModal" href="#" class="btn-buy">More Details</a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <span class="recommended-badge">Recommended</span>
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div> -->

        </div>
        <div class="row mt-4">
          <div class="col-lg-3 col-md-6">
            
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="box">
              <img src="/assets/img/Wilmers Hall/Wilmer's Hall 1024x768.png" alt="">
              <h3>WILMER ONG GUIDO HALL</h3>
              <p>This wide function room can accommodate your events – such as job fairs, dance studio, product booth, and event reception.</p>
              <!-- <h4><sup>$</sup>0<span> / month</span></h4> -->
              <!-- <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul> -->
              <div class="btn-wrap">
                <a data-toggle="modal" data-target="#WilmersHallModal" href="#" class="btn-buy">More Details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            
          </div>

        </div>

      </div>
    </section>
    <!-- MAIN SPACES Section -->

    <!-- ======= Virtual Tour Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <h2>VIRTUAL TOUR</h2>
          <h3>Explore DigiPARC at the comfort of your home.</h3>
          <br>
          <h6> <a href="https://goo.gl/maps/WbQgTiriejByYaMu8">#494 Lt. Artiaga Street, Brgy. Corazon De Jesus, San Juan City, Metro Manila, Philippines.</a></h6>
          <br>
        </div>
        <div class="iframe-container">
          <iframe src="https://www.youtube.com/embed/q2cnGVwM9zI?rel=0" width="560" height="315" frameborder="0"></iframe>
        </div>
      </div>
    </section><!-- End Virtual Tour Section -->



    <!-- Modal Wilmers Hall -->

    <div class="modal fade" id="WilmersHallModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->

            <!-- ======= Portfolio Details Section ======= -->
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">

                <div class="portfolio-details-container">

                  <div class="owl-carousel portfolio-details-carousel">
                    <img src="assets/img/Wilmers Hall/WOG1-1200x695-(SLider-for-more-details (1).png" class="img-fluid" alt="">
                    <img src="assets/img/Wilmers Hall/WOG3-1200x695-(SLider-for-more-details (1).png" class="img-fluid" alt="">
                    <img src="assets/img/Wilmers Hall/WOG5-1200x695-(SLider-for-more-details (1).png" class="img-fluid" alt="">
                    <img src="assets/img/Wilmers Hall/WOG6-1200x695-(SLider-for-more-details (1).png" class="img-fluid" alt="">
                  </div>
                        <!-- 
                          <div class="portfolio-info">
                            <h3>WILMER ONG GUIDO HALL</h3>
                            <ul>
                              <li><strong>Features</strong>: LED</li>
                              <li><strong>Features</strong>: LED</li>
                              <li><strong>Features</strong>: LED</li>
                              <li><strong>Features</strong>: LED</li>
                            </ul>
                          </div> -->

                </div>

                <div class="portfolio-description">
                  <h2>WILMER ONG GUIDO HALL</h2>
                  <!-- <ul>
                    <li><strong>Floor area (83.2 sqm)</strong>
                    <li><strong>3-Sided LED Display (27.5 sqm)</strong></li>
                  </ul> -->
                  <p>
                    This wide function room can accommodate your events – such as job fairs, dance studio, product booth, and event reception.  
                  </p>
                </div>

              </div>
            </section><!-- End Portfolio Details Section -->

          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Modal Wilmers Hall -->

    <!-- Modal Blackbox -->

    <div class="modal fade" id="BlackboxModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">
        
                <div class="portfolio-details-container">
        
                  <div class="owl-carousel portfolio-details-carousel">
                    <img src="assets/img/Blackbox/BB-1.png" class="img-fluid" alt="">
                    <img src="assets/img/Blackbox/BB-2 (1).png" class="img-fluid" alt="">
                    <img src="assets/img/Blackbox/BB-3 (1).png" class="img-fluid" alt="">
                  </div>
        
                  <!-- <div class="portfolio-info">
                    <h3>BLACKBOX</h3>
                    <ul>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                    </ul>
                  </div> -->
        
                </div>
        
                <div class="portfolio-description">
                  <h2>BLACKBOX</h2>
                  <ul>
                    <li><strong>Floor area (83.2 sqm)</strong>
                    <li><strong>3-Sided LED Display (27.5 sqm)</strong></li>
                  </ul>
                  <p>
                    Perfect for your upcoming online events. Its dark and light ambiance brings your event to a whole new level.
                  </p>
                </div>
        
              </div>
            </section>

          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Modal Blackbox -->

    <!-- Modal Gallery -->

    <div class="modal fade" id="GalleryModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">
        
                <div class="portfolio-details-container">
        
                  <div class="owl-carousel portfolio-details-carousel">
                    <img src="assets/img/gallery/GALLERY-1200x695-(SLider-for-more-details (1).png" class="img-fluid" alt="">
                    <img src="assets/img/gallery/Gallery-1 (1).png" class="img-fluid" alt="">
                    <img src="assets/img/gallery/Gallery-2 (1).png" class="img-fluid" alt="">
                    <img src="assets/img/gallery/Gallery-3 (1).png" class="img-fluid" alt="">
                  </div>
        
                  <!-- <div class="portfolio-info">
                    <h3>BLACKBOX</h3>
                    <ul>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                    </ul>
                  </div> -->
        
                </div>
        
                <div class="portfolio-description">
                  <h2>GALLERY</h2>
                  <ul>
                    <li><strong>Floor area (35 sqm)</strong>
                    <li><strong>L-Shaped 4x6 47” Video Wall Display</strong></li>
                    <li><strong>3 Wall-Mounted LED iPosters</strong></li>
                  </ul>
                  <p>
                    DigiPARC Gallery offers you an “L” shaped LED with three (3) iPosters and an 84” PHILIPS screen.  
                  </p>
                </div>
        
              </div>
            </section>

          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Modal Gallery -->

    <!-- Modal Creativity Hall -->

    <div class="modal fade" id="CreativityhallModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">
        
                <div class="portfolio-details-container">
        
                  <div class="owl-carousel portfolio-details-carousel">
                    <img src="assets/img/creativity/CREATIVITY-HALL-1200x695-(SLider-for-more-details (1).png" class="img-fluid" alt="">
                    <img src="assets/img/creativity/CH-1 (1).png" class="img-fluid" alt="">
                    <img src="assets/img/creativity/CH-2 (1).png" class="img-fluid" alt="">
                    <!-- <img src="assets/img/creativity/Creativity 1024x768_1632524850.png" class="img-fluid" alt=""> -->
                  </div>
        
                  <!-- <div class="portfolio-info">
                    <h3>BLACKBOX</h3>
                    <ul>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                    </ul>
                  </div> -->
        
                </div>
        
                <div class="portfolio-description">
                  <h2>CREATIVITY HALL</h2>
                  <ul>
                    <li><strong>Floor area (65 sqm)</strong>
                    <li><strong>3-Sided LED Display (28.75 sqm)</strong></li>
                    <li><strong>Floor LED (5 sqm)</strong></li>
                  </ul>
                  <p>
                    Equipped with a "U" shaped LED Wall, a stunning floor LED, and large teleprompter screens for your scripts and guides.  
                  </p>
                </div>
        
              </div>
            </section>

          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Modal Creativity Hall -->

    <!-- Modal WHITEBOX -->

    <div class="modal fade" id="WhiteboxModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            
            <section id="portfolio-details" class="portfolio-details">
              <div class="container">
        
                <div class="portfolio-details-container">
        
                  <div class="owl-carousel portfolio-details-carousel">
                    <img src="assets/img/whitebox/WHITEBOX-1200x695-(SLider-for-more-details rev1 (1).png" class="img-fluid" alt="">
                  </div>
        
                  <!-- <div class="portfolio-info">
                    <h3>BLACKBOX</h3>
                    <ul>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                      <li><strong>Features</strong>: LED</li>
                    </ul>
                  </div> -->
        
                </div>
        
                <div class="portfolio-description">
                  <h2>WHITEBOX</h2>
                  <ul>
                    <li><strong>Floor area (59 sqm)</strong>
                    <li><strong>Cyclorama</strong></li>
                  </ul>
                  <p>
                    You can also maximize your experience with our White Box studio for your photography or videography needs.
                  </p>
                </div>
        
              </div>
            </section>

          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Modal WHITEBOX -->

    

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Cta Section -->

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts">
      <div class="container">

        <div class="text-center title">
          <h3>GO FOR EXPERIENCE, GO FOR DIGITAL</h3>
          <p>For more than 18 years, Globaltronics continues to be the leading channel of enlightening people’s lives through digital innovation. In the future years, we will continue to serve the digital needs of several industries across the country, crisis or no crisis.</p>
        </div>

        <div class="row counters">

          <!-- <div class="col-lg-6 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p class="bold">PROJECT COMPLETED</p>
          </div>

          <div class="col-lg-6 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p class="bold">HAPPY CLIENTS</p>
          </div> -->

          <!-- <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div> -->

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Events Happen Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>HERE ARE SOME OF THE EVENTS WE DIGITIZED:</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-2021">2021</li>
              <li data-filter=".filter-2020">2020</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-2020">
            <img src="assets/img/events/2020/Spirit of Giving 2020 A Charity Online Concert (2).png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Spirit of Giving 2020</h4>
              <p>BLACKBOX</p>
              <a href="assets/img/events/2020/Spirit of Giving 2020 A Charity Online Concert (2).png" data-gall="portfolioGallery" class="venobox preview-link" title="Spirit of Giving 2020 A Charity Online Concert"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2020">
            <img src="assets/img/events/2020/15th International ICT Awards - Philippines (1).png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>15th International ICT Awards</h4>
              <p>BLACKBOX</p>
              <a href="assets/img/events/2020/15th International ICT Awards - Philippines (1).png" data-gall="portfolioGallery" class="venobox preview-link" title="15th International ICT Awards - Philippines"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/events/2021/Chinoy TV 1 (1).png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>CHINOY TV</h4>
              <p>BLACKBOX</p>
              <a href="assets/img/events/2021/Chinoy TV 1 (1).png" data-gall="portfolioGallery" class="venobox preview-link" title="CHINOY TV"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
 
          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/events/2021/DXN (1).png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>DXN</h4>
              <p>GALLERY</p>
              <a href="assets/img/events/2021/DXN (1).png" data-gall="portfolioGallery" class="venobox preview-link" title="DXN"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/events/2021/Ginebra.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Ginebra Live! Non-Stop Saya</h4>
              <p>CREATIVITY HALL</p>
              <a href="assets/img/events/2021/Ginebra.webp" data-gall="portfolioGallery" class="venobox preview-link" title="Ginebra Live! Non-Stop Saya"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/events/2021/King Herbals (1).png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>King Herbals</h4>
              <p>GALLERY</p>
              <a href="assets/img/events/2021/King Herbals (1).png" data-gall="portfolioGallery" class="venobox preview-link" title="King Herbals"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/events/2021/Road to KoreaTayoSoon Live Event (1).png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Road to #KoreaTayoSoon</h4>
              <p>BLACKBOX</p>
              <a href="assets/img/events/2021/Road to KoreaTayoSoon Live Event (1).png" data-gall="portfolioGallery" class="venobox preview-link" title="Road to #KoreaTayoSoon"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/events/2021/Tanduay Calendar Girl (2021)(1).png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Tanduay Calendar Girl (2021)</h4>
              <p>CREATIVITY HALL</p>
              <a href="assets/img/events/2021/Tanduay Calendar Girl (2021)(1).png" data-gall="portfolioGallery" class="venobox preview-link" title="Tanduay Calendar Girl (2021)"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <img src="assets/img/events/2021/DigiPARC-Brilliant-0342-1.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Brilliant</h4>
              <p>GALLERY</p>
              <a href="assets/img/events/2021/DigiPARC-Brilliant-0342-1.png" data-gall="portfolioGallery" class="venobox preview-link" title="BRILLIANT"><i class="bx bx-zoom-in"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
        
        </div>

      </div>
    </section><!-- End Events Happen Section -->


    <!-- Testimonial Section -->
    <section class="testimonial text-center">
      <div class="container">

          <div class="text-center title text-white">
            <h2 style="font-weight: bold;">TESTIMONIAL</h2>
            <p>DigiPARC started last October 29, 2020, and we will be passionate as ever.</p>
          </div>
          <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
           
              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                      <div class="testimonial4_slide">
                          <img src="assets/img/testimonial/FRANK MAMARIL.png" class="img-circle img-responsive" />
                          <p>"I HIGHLY ENCOURAGE PEOPLE FROM THE INDUSTRY TO VISIT. YOU WILL ENJOY EVERY MINUTE THAT YOU'RE HERE."</p>
                          <h4>- FRANK MAMARIL, CHINOY TV</h4>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img src="assets/img/testimonial/CYNTHIA PAGDILAO.png" class="img-circle img-responsive" />
                          <p>"I HAD A WONDERFUL EXPERIENCE TRYING THIS EVENTS PLACE. THIS WILL BENEFIT PHOTOGRAPHERS DOING ONLINE WEBINARS AND EXHIBITS. AS THE CHAIRMAN OF PHOTOWORLD ASIA, MY IDEAS WERE ALL CAPTURED HERE."</p>
                          <h4>- CYNTHIA PAGDILAO, PHOTOWORLD ASIA CHAIRMAN</h4>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img src="assets/img/testimonial/mark morales.png" class="img-circle img-responsive" />
                          <p>“SO I HIGHLY RECOMMEND DIGIPARC, ESPECIALLY TO THE MILLENNIALS WHO WANT TO START LIVE STREAMING, WITH THE HIGH-QUALITY AND HIGH-DEFINITION DIGITAL DISPLAYS, AND BEAUTIFUL PLACE." </p>
                          <h4>- MARK CHRISTIAN MORALEZ, DXN PHILIPPINES</h4>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial4_slide">
                        <img src="assets/img/testimonial/IVY DE GUZMAN.png" class="img-circle img-responsive" />
                        <p>“DIGIPARC IS WHAT WE HAVE VISUALIZED AS IDEAL VENUE FOR VIRTUAL EVENTS.”</p>
                        <h4>– IVY DE GUZMAN, DXN PHILIPPINES</h4>
                    </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonial4_slide">
                      <img src="assets/img/testimonial/ALVIN TAN.png" class="img-circle img-responsive" />
                      <p>“DIGIPARC – RIGHT PLACE, RIGHT QUALITY, RIGHT PRICE.”</p>
                      <h4>– ALVIN KINGSON TAN, CHINOY TV</h4>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonial4_slide">
                      <img src="assets/img/testimonial/Cecilia Catapang.png" class="img-circle img-responsive" />
                      <p>“SAFE AND BEAUTIFUL FACILITIES.”</p>
                      <h4>– DR. CECILIA CATAPANG, HEALTH AND WELLNESS MEDIA PERSONALITY</h4>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonial4_slide">
                      <img src="assets/img/testimonial/MASTER HANZ.png" class="img-circle img-responsive" />
                      <p>"DIGIPARC IS A WONDERFUL DIGITAL EVENTS PLACE FOR YOUR ONLINE EVENTS, WEBINARS, TRAINING, CONCERTS, EXHIBITS,AND ANYTHING YOU CAN IMAGINE."</p>
                      <h4>– MASTER HANZ CUA, FENG SHUI EXPERT</h4>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </a>
          </div>
      </div>
  </section>

  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Contact Us</h2>
        <h4>Are you planning to use our digital events place?</h4>
        <br>
        <h4>Great! We are offering a free hour if you book today!</h4>
      </div>
      <div class="section-title">
        <br>
        <h4>Reach out for a new project with us! </h4>
        <br>
        <h4>Don’t worry, DigiPARC is a safe and joyful place for you.</h4>

        <br>
        <br>
        <h4>Follow our social media accounts</h4>
        
        </div>
      <div class="social-links">
        <a href="https://www.facebook.com/GlobaltronicsPH/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <!-- <a href="https://twitter.com/globaltronicsph?lang=en" class="twitter"><i class="bx bxl-twitter"></i></a>         -->
        <a href="https://www.instagram.com/globaltronicsph/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/c/GlobaltronicsPH" class="youtube"><i class="bx bxl-youtube"></i></a>
        <!-- <a href="https://ph.linkedin.com/company/globaltronicsphl" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
      <div class="section-title">
        <br>
        <h4>For more details, you can send us a message and book a reservation with us! </h4>
        <br>
        <h4>Call <a href="tel:0887212878">(02) 8721-2878</a> or Sean at <a href="tel:09985405370">0998-540-5370.</a></h4>
      </div>
      
    </div>
  </section><!-- End Contact Us Section -->

  
  <!-- Modal Contact Us 2-->

  <div class="modal fade" id="Contact2Modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->

          <!-- ======= Portfolio Details Section ======= -->
          <section id="portfolio-details" class="portfolio-details">
            <div class="container">
              <div class="section-title pb-0">
                <h2>I WANT TO CONTACT SOMEONE</h2>

                <!-- <h4>Are you planning to use our digital events place?</h4>
                <br>
                <h4>Great! We are offering a free hour if you book today!</h4> -->
              </div>
              



              <!-- klaviyo form  -->
              <!-- <div class="klaviyo-form-SDJGXn"></div> -->


            </div>
          </section><!-- End Portfolio Details Section -->

        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Modal Contact Us 2-->



    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");'></div>
        </div>

      </div>
    </section> -->
    <!-- End Features Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->

   

    

   

    <!-- ======= Faq Section ======= -->
    <!-- <section id="faq" class="faq">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faq.jpg");'>&nbsp;</div>
        </div>

      </div>
    </section> -->
    <!-- End Faq Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>
      </div>

      

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="ri-map-pin-line"></i>
                <h4>Location:</h4>
                <p>494 Lt. Artiaga St., Corazon De Jesus, San Juan City, Metro Manila, Philippines 1500</p>
              </div>

              <div class="email">
                <i class="ri-mail-line"></i>
                <h4>Email:</h4>
                <p> <a href="mailto:inquiry@globaltronics.net">inquiry@globaltronics.net</a></p>
              </div>

              <div class="phone">
                <i class="ri-phone-line"></i>
                <h4>Call:</h4>
                <p><a href="tel:0887212878">(02) 8721-2878</a></p>
                <p>Sean : <a href="tel:09985405370">0998-540-5370</a></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="webform.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>

      <!-- <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div> -->
    </section>
    <!-- End Contact Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <!-- <h3>Digi<span style="color: orange;">PARC</span></h3> -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/DigiparcLOGO.png" alt="" class="img-fluid"></a>
      <p>The first “Truly Digital Events Place” in the country</p>
      <div class="social-links">
        <a href="https://www.facebook.com/GlobaltronicsPH/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://twitter.com/globaltronicsph?lang=en" class="twitter"><i class="bx bxl-twitter"></i></a>        
        <a href="https://www.instagram.com/globaltronicsph/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/c/GlobaltronicsPH" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="https://ph.linkedin.com/company/globaltronicsphl" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
      <div class="copyright">
        &copy; Copyright <strong><span>DigiPARC</span></strong> 2021. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <!-- klaviyo snippet  -->
  <script async type="text/javascript" src="https://static.klaviyo.com/onsite/js/klaviyo.js?company_id=S8uMWC"></script>

</body>

</html>