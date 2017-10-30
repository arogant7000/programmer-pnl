@extends('layouts.master')

@section('title')
  {{ $tag->name }}
@endsection



@section('content')

	<section id="hero" class="hero-auto parallax-section text-light" data-parallax-image="{{ asset('files/uploads/article.jpg')}}">

        <div id="page-title" class="wrapper align-center">
            <h4 class="subtitle-2">Tags</h4>
            <h2><strong>{{$tag->name}}</strong></h2>
        </div>

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
                                <img src="{{ url('photos/post/'.$value->images) }}"  style="height:300px; width:400px;">
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
                </div> <!-- END #blog-grid .isotope-grid -->

                <div class="spacer-small"></div>

                <div  id="pagination">

                </div>

            </div> <!-- END .main-content -->

            <aside class="sidebar right-float">
              <div class="sidebar-content">

                    <div class="widget widget_search">
                        <form role="search" method="get" id="searchform" class="searchform" action="/p/search">
                            <div>
                                <input type="text" value="" name="q" id="s" placeholder="Enter your search ..."/>
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
                        <h6 class="widget-title uppercase">Popular Posts</h6>
                        <ul>
                          @foreach ($popular as $a)
                            <li><a href="{{ url('/p/'.$a->slug) }}">{{$a ->title}}</a><span class="post-date">{{ $a->created_at->diffForHumans() }}</span></li>
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
            </aside>
            <div class="clear"></div>
            <br>
      	</div>
 	</section>
  @endsection
