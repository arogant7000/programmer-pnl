@extends('layouts.master')

@section('title')
  Service
@endsection
@section('header')
  <!-- HEADER -->
  <header id="header" class="header-bordered header-transparent transparent-light">
    <div class="header-inner clearfix">

            <!-- LOGO -->
            <div id="logo" class="left-float">
                <a href="index.html">
                  <img id="scroll-logo" src="files/uploads/logo-sudo-scroll.png" srcset="files/uploads/logo-sudo-scroll.png 1x, files/uploads/logo-sudo-scroll@2x.png 2x" alt="Logo Scroll">
                  <img id="dark-logo" src="files/uploads/logo-sudo-dark.png" srcset="files/uploads/logo-sudo-dark.png 1x, files/uploads/logo-sudo-dark@2x.png 2x" alt="Logo Dark">
                  <img id="light-logo" src="files/uploads/logo-sudo-light.png" srcset="files/uploads/logo-sudo-light.png 1x, files/uploads/logo-sudo-light@2x.png 2x" alt="Logo Light">
                </a>
            </div>

            <!-- MAIN NAVIGATION -->
            <div id="menu" class="right-float">
          <a href="#" class="responsive-nav-toggle"><span class="hamburger"></span></a>
                <div class="menu-inner">
                    <nav id="main-nav">
                        <ul>
                            <li class="menu-item-has-children"><a href="/">Home</a>
                            </li>

                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="submenu">
                                    <li class="menu-item-has-children"><a href="/about_me">About</a></li>
                                    <li class="menu-item-has-children"><a href="/service">Services</a></li>
                                    <li class="menu-item-has-children"><a href="/contact">Contact</a></li>
                                    <li class="menu-item-has-children"><a href="#">Miscellaneous</a>
                                        <ul class="submenu">
                                            <li><a href="/maintenance">Maintenance</a></li>
                                            <li><a href="/faq">FAQ</a></li>
                                            <li><a href="/er">404</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>





                            <li class="menu-item-has-children mega-menu"><a href="/article">Blog</a></li>

                            <li class="menu-item-has-children"><a href="shop-grid-fullwidth.html">Shop</a></li>
                        </ul>
                    </nav>

                    <div id="menu-misc" class="clearfix">

                        <!-- HEADER SEARCH -->
                        <div id="header-search">
                            <a href="#" id="show-search"><i class="fa fa-search"></i></a>
                            <div class="header-search-content">
                                <form action="http://www.spab-rice.com/themeforest/sudo/demo/search.html" method="get">
                                    <a href="#" id="close-search"></a>
                                    <input type="text" name="q" class="form-control" value="" placeholder="Enter your search ...">
                                    <h5 class="subtitle-1">... & press enter to start</h5>
                                </form>
                                <div class="search-outer"></div>
                            </div>
                        </div>

                        <!-- HEADER CART -->
                        <div id="header-cart">
                            <a href="shop-page-cart.html" id="show-cart"><i class="fa fa-shopping-cart"></i><span>3</span></a>
                            <div class="header-cart-content">
                                <ul class="cart-item-list">
                                    <li>
                                        <div class="cart-item-image">
                                            <a href="shop-single-simple.html"><img src="files/uploads/shop-cart-thumb-1.jpg" alt="SEO NAME" /></a>
                                        </div>
                                        <div class="cart-item-desc">
                                            <h6 class="product-name uppercase"><a href="#">White Stripes Shirt</a></h6>
                                            <span class="cart-item-quantity">2 x</span>
                                            <span class="cart-item-price">$ 26.99</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cart-item-image">
                                            <a href="shop-single-simple.html"><img src="files/uploads/shop-cart-thumb-2.jpg" alt="SEO NAME" /></a>
                                        </div>
                                        <div class="cart-item-desc">
                                            <h6 class="product-name uppercase"><a href="#">Wood Watch</a></h6>
                                            <span class="cart-item-quantity">1 x</span>
                                            <span class="cart-item-price">$ 189.99</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="cart-total">
                                    <h6 class="cart-total-name">Total</h6>
                                    <div class="cart-total-amount">$ 243,97</div>
                                </div>
                                <div class="cart-action">
                                    <a href="shop-page-cart.html" class="cart-action-cart sr-button button-mini button-3">View Cart</a>
                                    <a href="shop-page-checkout.html" class="cart-action-checkout sr-button button-mini button-2">Checkout</a>
                                </div>
                            </div>
                        </div><!-- END #header-cart -->


                    </div><!-- END #menu-misc -->
                </div><!-- END .menu-inner -->
            </div><!-- END #menu -->

    </div> <!-- END .header-inner -->
  </header>

@endsection
@section('content')
  <!-- HERO  -->
<section id="hero" class="hero-full parallax-section" data-parallax-image="files/uploads/2.jpg">

      <div id="page-title" class="wrapper align-center">
        <h4 class="subtitle-2" style="color:gold;">Our Services</h4>
          <hr class="zigzag mini colored">
          <h1 style="color:white;"><strong>Setiap Skill <br>butuh peningkatan dan implementasi</strong></h1>
      </div> <!-- END #page-title -->

  </section>
  <!-- HERO -->


<!-- PAGEBODY -->
<section id="page-body" class="notoppadding">

      <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
        <div class="column one-third align-center has-animation" style="background:#f5f6f7;">
            <div class="spacer-big"></div>
            <h2><strong>We</strong></h2>
            <div class="spacer-big"></div>
          </div>
          <div class="column one-third align-center text-light has-animation" data-delay="100" style="">
            <div class="spacer-big"></div>
            <h2><strong>Love</strong></h2>
            <div class="spacer-big"></div>
          </div>
          <div class="column one-third last-col align-center text-light has-animation" data-delay="200" style="">
            <div class="spacer-big"></div>
            <h2><strong>Programming</strong></h2>
            <div class="spacer-big"></div>
          </div>
      </div> <!-- END .column-section -->

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
        </div> <!-- END .column-section -->

      </div> <!-- END .wrapper -->

      <div class="spacer-big"></div>

      <div class="inline-video has-animation" data-type="youtube" data-videoid="7j3xw0ytlcY">
          <img src="files/uploads/2.jpg" alt="SEO NAME">
      </div>

      <div class="spacer-big"></div>

      <div class="wrapper align-center has-animation">
          <img src="files/uploads/logo-sudo-scroll.png" srcset="files/uploads/logo-sudo-scroll.png 1x, files/uploads/logo-sudo-scroll@2x.png 2x" alt="Logo">
          <h3><strong>Join our Newsletter</strong></h3>
            <h5 class="subtitle-1">Dapatkan Informasi Update dari Kami.</h5>
            <div class="spacer-mini"></div>
            <form action="https://azurewebsites.us17.list-manage.com/subscribe/post?u=3dfbc25cf26ab1082c2680f46&amp;id=cb55a72f3b" method="post" id="newsletter-widget-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <input type="email" id="newsletter-email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email Adress" required>
                <input type="submit" id="newsletter-submit" name="subscribe" value="Sign Up">
            </form>
      </div> <!-- END .wrapper -->

      <div class="spacer-big"></div>

</section>
<!-- PAGEBODY -->
@endsection
