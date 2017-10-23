@extends('layouts.master')

@section('title')
  {{ $tag->name }}
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
	<section id="hero" class="hero-auto parallax-section text-light" data-parallax-image="files/uploads/hero-blog-3.jpg">

        <div id="page-title" class="wrapper align-center">
            <h4 class="subtitle-2">Categories</h4>
            <h2><strong>{{$tag->name}}</strong></h2>
        </div> <!-- END #page-title -->

    </section>
    <!-- HERO -->

	<!-- PAGEBODY -->
	<section id="page-body">
    	<div class="wrapper">
            <div class="main-content left-float">

                <div id="blog-grid" class="isotope-grid blog-container style-column-2 fitrows isotope-spaced">
                  @foreach ( $tag->posts as $key => $value)
                    <div class="isotope-item blog-item">
                        <div class="blog-media">
                            <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                                <img src="{{ url('photos/post/'.$value->images) }}" alt="SEO IMG NAME" style="height:300px; width:400px;">
                              <!-- <img src="files/uploads/blog-thumb-grid-1-hover.jpg" class="hover-pic" alt="SEO IMG NAME">  -->
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
                                <li class="post-date">5 hours ago</li>
                                <li class="post-comments"><i class="fa fa-comments"></i> 3</li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div> <!-- END #blog-grid .isotope-grid -->

                <div class="spacer-small"></div>

                <div  id="pagination">
                    <ul>
                        <li class="prev"><a href="#">Previous Page</a></li>
                        <li class="page"><span class="current">1</span></li>
                        <li class="page"><a href="#">2</a></li>
                        <li class="next"><a href="#">Next Page</a></li>
                    </ul>
                </div>

            </div> <!-- END .main-content -->

            <aside class="sidebar right-float">
              <div class="sidebar-content">

                    <div class="widget widget_search">
                        <form role="search" method="get" id="searchform" class="searchform" action="#">
                            <div>
                                <input type="text" value="" name="s" id="s" placeholder="Enter your search ..."/>
                                <input type="submit" id="searchsubmit" value="Search" />
                            </div>
                        </form>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h6 class="widget-title uppercase">Tags</h6>
                        <div class="tagcloud">
                          @foreach ($tags as $tag)
                            <a href="{{ url('/tags/'.$tag->id)}}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="widget widget_text">
                        <h6 class="widget-title uppercase">Text Widget</h6>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    </div>

                    <div class="widget widget_recent_entries">
                        <h6 class="widget-title uppercase">Recent Posts</h6>
                        <ul>
                          @foreach ($recent as $a)
                            <li><a href="{{ url('/p/'.$a->slug) }}">{{$a ->title}}</a><span class="post-date">{{ $a->created_at->format('d M Y \a\t h:i a') }}</span></li>
                          @endforeach
                        </ul>
                    </div>

                    <div class="widget">
                        <h6 class="widget-title uppercase">Categories</h6>
                        <ul class="menu">
                          @foreach ($category as $cat)
                            <li><a href="{{ url('/category/'.$cat->id)}}">{{$cat->name}}</a></li>
                          @endforeach
                        </ul>
                    </div>

              </div>
            </aside> <!-- END .sidebar -->
            <div class="clear"></div>
            <br>
      	</div> <!-- END .wrapper -->
 	</section>
  @endsection
