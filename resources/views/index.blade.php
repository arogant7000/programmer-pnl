@extends('layouts.master')

@section('title')
  Home
@endsection



@section('content')
  @include('partials.slider')

	<section id="page-body">

    	<div class="wrapper">

        	<h4 class="text-light"><strong>Our Highlights</strong></h4>
            <div class="spacer-mini"></div>

            <div id="blog-grid-highlights" class="owl-carousel owl-spaced blog-container" data-margin="30" data-nav="false" data-items="3">

              <!-- Bagian Highlight Posts  -->

              @foreach ($posts as $key => $value)
                <div class="owl-item blog-item">
                    <div class="blog-media">
                        <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                            <img src="{{ url('photos/post/'.$value->images) }}"  style="height:250px; width:500px;">
                        </a>
                    </div>

                    <div class="blog-desc align-center">
                        <div class="blog-headline">
                            <h6 class="post-category uppercase">{{$value->category->name}}</h6>
                            <h5 class="post-name"><a href="{{ url('/p/'.$value->slug) }}"><strong>{{$value->title}}</strong></a></h5>
                        </div>
                        <ul class="blog-meta">
                            <li class="post-date">{{ $value->created_at->diffForHumans() }}</li>
                        </ul>
                    </div>
                </div>
                  @endforeach
            </div>

            <div class="spacer-big"></div>


            <!-- Bagian Posts Terakhir -->

            <h4><strong>Latest Posts</strong></h4>
            <div class="spacer-mini"></div>

            <div id="blog-grid-latest-featured" class="isotope-grid blog-container style-column-2 fitrows isotope-spaced">
              @foreach ($latest as $key => $value)
                <div class="isotope-item blog-item">
                    <div class="blog-media">
                        <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                            <img src="{{ url('photos/post/'.$value->images) }}"  style="height:330px; width:700px;">
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
                          </ul>
                    </div>
                </div>
                @endforeach
            </div>

            <div id="blog-grid-latest-main" class="isotope-grid blog-container style-column-3 fitrows isotope-spaced">
              @foreach ($latest2 as $key => $value)
                <div class="isotope-item blog-item">
                    <div class="blog-media">
                        <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                            <img src="{{ url('photos/post/'.$value->images) }}"  style="height:250px; width:500px;">
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
                        </ul>
                    </div>
                </div>
              @endforeach
            </div>

        </div>

        <div class="spacer-big"></div>


        <!-- Bagian Posts Referensi harus di baca  -->
        <div class="fullwidth-section text-light align-center parallax-section" data-parallax-image="files/uploads/must-read.jpg">
        	<div class="fullwidth-content wrapper">

            	<h4 class="align-center"><strong>Must Reads</strong></h4>
                <hr class="medium thick">
                <div class="spacer-medium"></div>

                <div id="blog-grid-trending" class="owl-carousel owl-spaced blog-container nav-light" data-margin="30" data-nav="false" data-items="3">
                  @foreach ($must_reads as $key => $value)
                    <div class="owl-item blog-item">
                        <div class="blog-media">
                            <a href="{{ url('/p/'.$value->slug) }}" class="thumb-overlay">
                                <img src="{{ url('photos/post/'.$value->images) }}"  style="height:300px; width:500px;">
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
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>


        <!--  Bagian Follow US  -->
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

        <!-- Bagian Newsletter Signup  -->
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

@endsection
