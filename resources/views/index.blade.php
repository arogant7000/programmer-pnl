@extends('layouts.master')

@section('title')
  Home
@endsection

@section('header')
  <!-- HEADER -->
  <header id="header" class="header-transparent transparent-light">
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
  @include('partials.slider')
  <!-- PAGEBODY -->
	<section id="page-body">

    	<div class="wrapper">

        	<h4 class="text-light"><strong>Our Highlights</strong></h4>
            <div class="spacer-mini"></div>

            <div id="blog-grid-highlights" class="owl-carousel owl-spaced blog-container" data-margin="30" data-nav="false" data-items="3">


              @foreach ($posts as $key => $value)
                <div class="owl-item blog-item">
                    <div class="blog-media">
                        <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                            <img src="{{ url('photos/post/'.$value->images) }}" alt="SEO IMG NAME" style="height:250px; width:500px;">
                          <!--  <img src="{{ asset('files/uploads/blog-thumb-grid-2-hover.jpg')}}" class="hover-pic" alt="SEO IMG NAME">  -->
                        </a>
                    </div>

                    <div class="blog-desc align-center">
                        <div class="blog-headline">
                            <h6 class="post-category uppercase">{{$value->category->name}}</h6>
                            <h5 class="post-name"><a href="{{ url('/p/'.$value->slug) }}"><strong>{{$value->title}}</strong></a></h5>
                        </div>
                        <ul class="blog-meta">
                            <li class="post-date">{{ $value->created_at->diffForHumans() }}</li>
                            <li class="post-comments"><i class="fa fa-comments"></i> 3</li>
                        </ul>
                    </div>
                </div>
                  @endforeach
            </div> <!-- END #blog-grid-highlights .owl-carousel -->

            <div class="spacer-big"></div>

            <h4><strong>Latest News</strong></h4>
            <div class="spacer-mini"></div>

            <div id="blog-grid-latest-featured" class="isotope-grid blog-container style-column-2 fitrows isotope-spaced">
              @foreach ($latest as $key => $value)
                <div class="isotope-item blog-item">
                    <div class="blog-media">
                        <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                            <img src="{{ url('photos/post/'.$value->images) }}" alt="SEO IMG NAME" style="height:330px; width:700px;">
                            <!-- <img src="{{ asset('files/uploads/blog-thumb-grid-1-hover.jpg')}}" class="hover-pic" alt="SEO IMG NAME">  -->
                        </a>
                    </div>

                    <div class="blog-desc align-center">
                        <div class="blog-headline">
                            <h6 class="post-category uppercase">{{$value->category->name}}</h6>
                            <h5 class="post-name"><a href="{{ url('/p/'.$value->slug) }}"><strong>{{$value->title}}</strong></a></h5>
                        </div>
                        <p>
                          {!! str_limit($value->body, $limit = 60, $end = '......') !!}
                        </p>
                        <ul class="blog-meta">
                            <li class="post-date">{{ $value->created_at->diffForHumans() }}</li>
                              <!-- <li class="post-comments"><i class="fa fa-comments"></i> 3</li>  -->
                        </ul>
                    </div>
                </div>
                @endforeach
            </div> <!-- END #blog-grid-latest-featured .isotope-grid -->

            <div id="blog-grid-latest-main" class="isotope-grid blog-container style-column-3 fitrows isotope-spaced">
              @foreach ($latest2 as $key => $value)
                <div class="isotope-item blog-item">
                    <div class="blog-media">
                        <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                            <img src="{{ url('photos/post/'.$value->images) }}" alt="SEO IMG NAME" style="height:250px; width:500px;">
                            <!--<img src="{{ asset('files/uploads/blog-thumb-grid-3-hover.jpg')}}" class="hover-pic" alt="SEO IMG NAME">  -->
                        </a>
                    </div>

                    <div class="blog-desc align-center">
                        <div class="blog-headline">
                            <h6 class="post-category uppercase">{{$value->category->name}}</h6>
                            <h5 class="post-name"><a href="{{ url('/p/'.$value->slug) }}"><strong>{{$value->title}}</strong></a></h5>
                        </div>
                        <p>
                          {!! str_limit($value->body, $limit = 60, $end = '......') !!}
                        </p>                        <ul class="blog-meta">
                            <li class="post-date">{{ $value->created_at->diffForHumans() }}</li>
                            <!-- <li class="post-comments"><i class="fa fa-comments"></i> 3</li>  -->
                        </ul>
                    </div>
                </div>
              @endforeach
            </div> <!-- END #blog-grid-latest-main .isotope-grid -->

        </div> <!-- END .wrapper -->

        <div class="spacer-big"></div>

        <div class="fullwidth-section text-light align-center parallax-section" data-parallax-image="files/uploads/1.jpg">
        	<div class="fullwidth-content wrapper">

            	<h4 class="align-center"><strong>Must Reads</strong></h4>
                <hr class="medium thick">
                <div class="spacer-medium"></div>

                <div id="blog-grid-trending" class="owl-carousel owl-spaced blog-container nav-light" data-margin="30" data-nav="false" data-items="3">
                  @foreach ($must_reads as $key => $value)
                    <div class="owl-item blog-item">
                        <div class="blog-media">
                            <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                                <img src="{{ url('photos/post/'.$value->images) }}" alt="SEO IMG NAME" style="height:300px; width:500px;">
                                <!-- <img src="{{ asset('files/uploads/blog-thumb-grid-6-hover.jpg')}}" class="hover-pic" alt="SEO IMG NAME"> -->
                            </a>
                        </div>

                        <div class="blog-desc align-center">
                            <div class="blog-headline">
                                <h6 class="post-category uppercase">{{$value->category->name}}</h6>
                                <h5 class="post-name"><a href="{{ url('/p/'.$value->slug) }}"><strong>{{$value->title}}</strong></a></h5>
                            </div>
                            <p>
                              {!! str_limit($value->body, $limit = 60, $end = '......') !!}
                            </p>                            <ul class="blog-meta">
                                <li class="post-date">{{ $value->created_at->diffForHumans() }}</li>
                                <!-- <li class="post-comments"><i class="fa fa-comments"></i> 3</li>  -->
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div> <!-- END #blog-grid-highlights .owl-carousel -->

            </div>
        </div>

        <div class="column-section boxed-sticky adapt-height vertical-center text-light align-center clearfix">
        	<div class="column one-half" style="background: #446ebf;">
            	<h5>Follow Me on Facebook</h5>
            	<ul class="socialmedia-widget style-circled size-medium hover-fade-2">
                    <li class="facebook"><a href="https://www.facebook.com/el.mulya10"></a></li>
                </ul>
            </div>
            <div class="column one-half last-col" style="background: #ff0066;">
            	<h5>Follow Me on Instagram</h5>
            	<ul class="socialmedia-widget style-circled size-medium hover-fade-2">
                    <li class="instagram"><a href="https://www.instagram.com/ichsan_m_/"></a></li>
                </ul>
            </div>
        </div>

        <div class="fullwidth-section align-center" style="background:#f5f6f7;">
        	<div class="fullwidth-content wrapper">

            	<h3><strong>Join our Newsletter</strong></h3>
                <h5 class="subtitle-1">Dapatkan Informasi Update dari Kami.</h5>
                <div class="spacer-mini"></div>
                <form action="https://azurewebsites.us17.list-manage.com/subscribe/post?u=3dfbc25cf26ab1082c2680f46&amp;id=cb55a72f3b" method="post" id="newsletter-widget-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <input type="email" id="newsletter-email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email Adress" required>
                    <input type="submit" id="newsletter-submit" name="subscribe" value="Sign Up">
                </form>

            </div>
        </div>

 	</section>
	<!-- PAGEBODY -->
@endsection
