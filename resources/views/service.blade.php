@extends('layouts.master')

@section('title')
  Service
@endsection

@section('content')
  <!-- HERO  -->
<section id="hero" class="hero-full parallax-section" data-parallax-image="files/uploads/hero-services-3.jpg">

      <div id="page-title" class="wrapper align-center">
        <h4 class="subtitle-2">Our Services</h4>
          <hr class="zigzag mini colored">
          <h1><strong>Great Brands <br>need great services</strong></h1>
      </div> <!-- END #page-title -->

  </section>
  <!-- HERO -->


<!-- PAGEBODY -->
<section id="page-body" class="notoppadding">

      <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
        <div class="column one-third align-center has-animation" style="background:#f5f6f7;">
            <div class="spacer-big"></div>
            <h2><strong>We provide</strong></h2>
            <div class="spacer-big"></div>
          </div>
          <div class="column one-third align-center text-light has-animation" data-delay="100" style="background:url(files/uploads/services-1.jpg) center center;background-size:cover;">
            <div class="spacer-big"></div>
            <h2><strong>Digital</strong></h2>
            <div class="spacer-big"></div>
          </div>
          <div class="column one-third last-col align-center text-light has-animation" data-delay="200" style="background:url(files/uploads/services-2.jpg) center center;background-size:cover;">
            <div class="spacer-big"></div>
            <h2><strong>Branding</strong></h2>
            <div class="spacer-big"></div>
          </div>
      </div> <!-- END .column-section -->

      <div class="spacer-big"></div>

      <div class="wrapper align-center has-animation">

        <h2><strong>One of our principles is <br>constant internal communication</strong></h2>
        <h5 class="subtitle-1">We provide perfect and professional services, <br>covering all areas of the modern communication</h5>

          <div class="spacer-medium"></div>

          <div class="column-section clearfix">
            <div class="column one-third">
                <i class="ion ion-4x ion-ios-speedometer-outline"></i>
                  <h5 class="uppercase">Projects delivered</h5>
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.</p>
              </div>
              <div class="column one-third">
                <i class="ion ion-4x ion-ios-settings"></i>
                  <h5 class="uppercase">Satisfied Clients</h5>
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.</p>
              </div>
              <div class="column one-third last-col">
                <i class="ion ion-4x ion-ios-monitor-outline"></i>
                  <h5 class="uppercase">Lines of Code</h5>
                  <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli.</p>
              </div>
        </div> <!-- END .column-section -->

      </div> <!-- END .wrapper -->

      <div class="spacer-big"></div>

      <div class="inline-video has-animation" data-type="youtube" data-videoid="9dgSa4wmMzk">
          <img src="files/uploads/services-3.jpg" alt="SEO NAME">
      </div>

      <div class="spacer-big"></div>

      <div class="wrapper align-center has-animation">
          <img src="files/uploads/logo-sudo-scroll.png" srcset="files/uploads/logo-sudo-scroll.png 1x, files/uploads/logo-sudo-scroll@2x.png 2x" alt="Logo">
          <h3><strong>Join our Newsletter</strong></h3>
          <h5 class="subtitle-1">Get the latest news from Sudo, and receive 10% for your next order.</h5>
          <div class="spacer-mini"></div>
          <form action="#" method="post" id="newsletter-widget-form">
              <input type="email" id="newsletter-email" name="newsletter-email" placeholder="Your Email Adress">
              <input type="submit" id="newsletter-submit" value="Sign Up">
          </form>
      </div> <!-- END .wrapper -->

      <div class="spacer-big"></div>

</section>
<!-- PAGEBODY -->
@endsection
