@extends('layouts.master')

@section('title')
  {{$post->title}}
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

  <!-- HERO  -->
<section id="hero" class="hero-big parallax-section text-light" data-parallax-image="{{ url('photos/post/'.$post->images) }}">

      <div id="page-title" class="wrapper align-center">
          <h5 class="subtitle-2"><a href="{{ url('/category/'.$post->category->id)}}">{{$post->category->name}}</a></h5>
          <h1><strong>{{$post->title}}</strong></h1>
          <ul class="blog-meta">
              <li class="post-date">{{ $post->created_at->format('d M Y \a\t h:i a') }}</li>
              <li class="post-author"><a href="/about_me"><span>by {{ $post->author->name }}</span></a></li>
          </ul>
      </div> <!-- END #page-title -->
      <a href="#" id="scroll-down"></a>

  </section>
  <!-- HERO -->

  <!-- PAGEBODY -->

  <section id="page-body">

      <div class="wrapper">

            <div id="blog-single" class="main-content left-float">

                <div class="post-content">
                  {!! $post->body !!}
                </div> <!-- END .post-content -->

                <div class="tagcloud">
                    <h6 class="widget-title uppercase">Tags : </h6>
                    @foreach ($post->tags as $tag)
                      <a href="{{ url('/tags/'.$tag->id)}}">{{ $tag->name }}</a>
                    @endforeach
                </div>

                <div id="share">
                    <ul>
                        <li class="facebook"><a href="#"><span>Share</span></a></li>
                        <li class="twitter"><a href="#"><span>Tweet</span></a></li>
                        <li class="googleplus"><a href="#"><span>Share</span></a></li>
                        <li class="pinterest"><a href="#"><span>Pin it</span></a></li>
                    </ul>
                </div>

                <div class="author-box">
                  <div class="author-image"><img src="{{ asset('files/img/1.jpg') }}" alt="SEO NAME"></div>
                    <div class="author-details">
                      <h6 class="subtitle-2">Written by</h6>
                        <h5 class="author-name"><a href="/about_me">{{ $post->author->name }}</a></h5>
                      <p class="author-desc">Semoga bisa terus berkembang dan mencoba memberi pengetahuan untuk berbagai orang.</p>
                    </div>
                </div>

                <!-- COMMENTS -->
                <div id="blog-comments" class="comments">
                  <div id="disqus_thread"></div>
                      <script>

                      /**
                      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                      /*
                      var disqus_config = function () {
                      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                      };
                      */

                      var disqus_shortname = 'programmer-pnl';
                          @if (isset($slug))
                            var disqus_identifier = 'programmer-pnl-{{ $slug }}';
                          @endif

                      (function() { // DON'T EDIT BELOW THIS LINE
                      var d = document, s = d.createElement('script');
                      s.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                      s.setAttribute('data-timestamp', +new Date());
                      (d.head || d.body).appendChild(s);
                      })();
                      </script>
                      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                </div> <!-- END #blog-comments -->
                <!-- COMMENTS -->

            </div> <!-- END #blog-single .main-content -->

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
                        <h6 class="widget-title uppercase">Ads</h6>
                        <p></p>
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

        </div> <!-- END .wrapper -->

        <div class="spacer-medium"></div>

      <div id="single-pagination">
            <ul>



                <li class="back"><a href="/article">Back to Blog</a></li>



            </ul>
        </div>
  </section>

@endsection
