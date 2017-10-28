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
<section id="hero" class="hero-full text-light parallax-section" data-parallax-image="files/uploads/1.jpg">

      <div id="page-title" class="wrapper align-center">
        <h4 class="subtitle-2">Contact</h4>
          <hr class="zigzag mini colored">
          <h1><strong>Apa yang bisa kami bantu?</strong></h1>
      </div> <!-- END #page-title -->

  </section>
  <!-- HERO -->


<!-- PAGEBODY -->
<section id="page-body" class="notoppadding">

     <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
        <div class="column one-third align-center text-light has-animation" style="background:#1a1a1a;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Alamat</h5>
              <hr class="zigzag mini">
              <p>Jl. Banda Aceh-Medan Km. 280,3, Buketrata<br>Mesjid Punteut, Blang Mangat, Kota Lhokseumawe, Aceh 24301, Indonesia </p>
            <div class="spacer-medium"></div>
          </div>
          <div class="column one-third align-center text-light has-animation" data-delay="100" style="background:#000000;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Handphone</h5>
              <hr class="zigzag mini">
              <p>+6282360602080</p>
            <div class="spacer-medium"></div>
          </div>
          <div class="column one-third last-col align-center text-light has-animation" data-delay="200" style="background:#1a1a1a;">
            <div class="spacer-medium"></div>
            <h5 class="uppercase">Email</h5>
              <hr class="zigzag mini">
              <p>ichsan.mulya@outlook.com</p>
            <div class="spacer-medium"></div>
          </div>
      </div> <!-- END .column-section -->

      <div class="spacer-big"></div>

    <div class="wrapper-small">

          <div class="align-center">
        <hr class="zigzag medium">
          <div class="spacer-mini"></div>
            <h5 class="subtitle-2 colored">Get Social</h5>
              <ul class="socialmedia-widget style-circled size-small hover-slide-1">
                  <li class="facebook"><a href="#"></a></li>
                  <li class="twitter"><a href="#"></a></li>
                  <li class="instagram"><a href="#"></a></li>
              </ul>
          <div class="spacer-mini"></div>
        <hr class="zigzag medium">
          </div>

        <div class="spacer-medium"></div>

          <h3 class="align-center"><strong>Punya Pertanyaan?</strong></h3>
          <h5 class="subtitle-2 align-center">Kami Siap Membantu Anda<br> Tinggalkan Pertanyaan pada kolom di bawah ini !!</h5>


          <div class="spacer-medium"></div>
          <form id="contact-form" class="checkform sendemail" action="http://www.spab-rice.com/themeforest/sudo/demo/php/contact-send.php" method="post">
              <div class="form-row">
                  <label for="name">Name <abbr title="required" class="required">*</abbr></label>
                  <input type="text" name="name" id="name" class="name req" value="" />
              </div>

              <div class="form-row">
                  <label for="email">Email <abbr title="required" class="required">*</abbr></label>
                  <input type="text" name="email" id="email" class="email req" value="" />
              </div>

              <div class="form-row">
                  <label for="message">Message <abbr title="required" class="required">*</abbr></label>
                  <textarea name="message" id="message" class="message req" rows="15" cols="50"></textarea>
              </div>

              <div class="form-row form-note">
                  <div class="alert-error">
                    <h5>Something went wrong</h5>
                      Please check your entries!
                  </div>
              </div>

              <div class="form-row hidden">
                  <input type="text" id="form-check" name="form-check" value="" class="form-check" />
              </div> <!-- Spam check field -->

              <div class="form-row">
                  <input type="submit" name="submit" class="submit" value="Send Message" />
              </div>

              <input type="hidden" name="subject" value="Contact Subject Sudo html" />
              <input type="hidden" name="fields" value="name,email,message" />
        </form>

      </div> <!-- END .wrapper-small -->

      <div class="spacer-big"></div>

      <div id="map1" class="google-map " style="height:400px;"></div>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCGBmXJ6bMftK_U47D-iXClTL6oe6KWmIM"></script>
      <script type="text/javascript">
    function mapinitialize1() {
      var latlng = new google.maps.LatLng(5.119553,97.157197);
      var myOptions = {
        zoom: 14,
        center: latlng,
        scrollwheel: false,
        scaleControl: false,
        disableDefaultUI: false,
        styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}],
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("map1"),myOptions);

      var image = new google.maps.MarkerImage("files/uploads/map-pin.png", null, null, null, new google.maps.Size(51,68));
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        position: map.getCenter()
      });

      var contentString = "PNL PROGRAMMER COMMUNITY";
      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });

      google.maps.event.addListener(marker, "click", function() {
        infowindow.open(map,marker);
      });


    }
    mapinitialize1();
  </script>

</section>
<!-- PAGEBODY -->
@endsection
