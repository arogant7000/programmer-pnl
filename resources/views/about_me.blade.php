@extends('layouts.master')

@section('title')
  About Me
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
  <section id="hero" class="hero-big parallax-section" data-parallax-image="{{ asset('files/img/1.jpg') }}">

        <div id="page-title" class="wrapper title-bottom">
          <h4 style="color:red;"><strong>Hallo, Saya Mulia Ichsan</strong></h4>
            <h5 style="color:red;">Programmer dan Wakil Ketua Komunitas Pemrograman PNL</h5>
        </div> <!-- END #page-title -->

    </section>
    <!-- HERO -->


  <!-- PAGEBODY -->
  <section id="page-body" class="notoppadding">

        <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
          <div class="column one-half bigpadding">
              <div class="spacer-medium"></div>
              <p>Saya seorang mahasiswa Teknik Informatika pada Politeknik Negeri Lhokseumawe. Sebagai mahasiswa IT, Programming dapat dikatakan adalah sebagai hobi.</p>
              <p>Sedikit keahlian yang saya miliki adalah kegemaran saya dalam bahasa Java, dan mendalami tentang Cisco Networking dikarenakan saya termasuk kedalam anggota Cisco Networking Academy Politeknik Aceh.</p>
              <p>Selain itu saya hobi dalam Pemrograman Web, serta mendalami tentang Framework dalam web. Sehingga saya memutuskan membuat website ini untuk tujuan pembelajaran saya dengan sedikit kemampuan saya.</p>
              <div class="spacer-medium"></div>
            </div>
            <div class="column one-half bigpadding last-col" style="background:#dce7eb;">
              <blockquote>
                Kalau hidup sekedar hidup, babi hutan juga hidup. <br> Kalau bekerja sekedar bekerja, kera juga bekerja
                    <cite>Buya Hamka</cite>
                </blockquote>
            </div>
        </div> <!-- END .column-section -->


  </section>
  <!-- PAGEBODY -->
@endsection
