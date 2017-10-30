@extends('layouts.master')

@section('title')
  Layanan & Informasi
@endsection

@section('content')

<section id="hero" class="hero-full parallax-section" data-parallax-image="{{ asset('files/uploads/service.jpg')}}">

      <div id="page-title" class="wrapper align-center">
        <h4 class="subtitle-2" style="color:gold;">Our Services</h4>
          <hr class="zigzag mini colored">
          <h1 style="color:white;"><strong>Setiap Skill <br>butuh peningkatan dan implementasi</strong></h1>
      </div>

  </section>




<section id="page-body" class="notoppadding">

      <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
        <div class="column one-third align-center has-animation" style="background:#f5f6f7;">
            <div class="spacer-big"></div>
            <h2><strong>We</strong></h2>
            <div class="spacer-big"></div>
          </div>
          <div class="column one-third align-center text-light has-animation" data-delay="100" style="background:#ff0000;">
            <div class="spacer-big"></div>
            <h2><strong>Love</strong></h2>
            <div class="spacer-big"></div>
          </div>
          <div class="column one-third last-col align-center text-light has-animation" data-delay="200" style="background:#33cc33;">
            <div class="spacer-big"></div>
            <h2><strong>Programming</strong></h2>
            <div class="spacer-big"></div>
          </div>
      </div>

      <div class="spacer-big"></div>

      <div class="wrapper align-center has-animation">

        <h2><strong>Bergabung dan Belajar Bersama Kami</strong></h2>
        <h5 class="subtitle-1">Sebagai Komunitas Pembejalaran dalam bidang Pemrograman, <br>untuk menghadapi peluang Juara dalam berbagai Event dengan beragam metode</h5>

          <div class="spacer-medium"></div>

          <div class="column-section clearfix">
            <div class="column one-third">
                <i class="ion ion-4x ion-ios-speedometer-outline"></i>
                  <h5 class="uppercase">Intensif Learning</h5>
                  <p>Belajar secara gratis, teratur dan terampil bersama serta berusaha memecahkan masalah yang ada pada dunia nyata kedalam pemograman dengan bersama.</p>
              </div>
              <div class="column one-third">
                <i class="ion ion-4x ion-ios-settings"></i>
                  <h5 class="uppercase">Up to New Technology</h5>
                  <p>Menyiapkan skill dalam berbagai bidang-bidang teknologi terbaru dan mempelajari hampir semua jenis pemrograman.</p>
              </div>
              <div class="column one-third last-col">
                <i class="ion ion-4x ion-ios-monitor-outline"></i>
                  <h5 class="uppercase">Keep it Code</h5>
                  <p>Tetap membudayakan coding dalam setiap waktu untuk membentuk skill yang terampil.</p>
              </div>
        </div>

      </div>

      <div class="spacer-big"></div>

      <div class="inline-video has-animation" data-type="youtube" data-videoid="7j3xw0ytlcY">
          <img src="{{ asset('files/uploads/must-read.jpg')}}">
      </div>

      <div class="spacer-big"></div>

      <div class="wrapper align-center has-animation">
          <img src="{{ asset('files/uploads/map-pin.png')}}" srcset="{{ asset('files/uploads/map-pin.png')}}">
          <h3><strong>Join our Newsletter</strong></h3>
            <h5 class="subtitle-1">Dapatkan Informasi Update dari Kami.</h5>
            <div class="spacer-mini"></div>
            <form action="https://azurewebsites.us17.list-manage.com/subscribe/post?u=3dfbc25cf26ab1082c2680f46&amp;id=cb55a72f3b" method="post" id="newsletter-widget-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <input type="email" id="newsletter-email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email Adress" required>
                <input type="submit" id="newsletter-submit" name="subscribe" value="Sign Up">
            </form>
      </div>

      <div class="spacer-big"></div>

</section>

@endsection
