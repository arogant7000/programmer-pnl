@extends('layouts.master')

@section('title')
  Pencarian " {{$search}} "
@endsection


@section('content')
  <section id="hero" class="hero-auto" style="background: #f5f6f7;">

        <div id="page-title" class="wrapper align-center">
            <h4 class="subtitle-2">Hasil Pencarian</h4>
            <h2><strong>{{$search}}</strong></h2>
        </div> <!-- END #page-title -->

    </section>
    <!-- HERO -->

	<!-- PAGEBODY -->
	<section id="page-body">
      	<div class="wrapper">

            <div class="main-content left-float">

                <div id="blog-grid" class="classic-blog blog-container">

                  @foreach ($posts as $post)

                    <div class="blog-item">
                        <div class="blog-media">
                            <a href="{{ url('/p/'.$post->slug) }}" class="thumb-overlay">
                                <img src="{{ url('photos/post/'.$post->images) }}">
                            </a>
                        </div>

                        <div class="blog-desc">
                            <div class="blog-headline">
                                <h6 class="post-category uppercase">{{$post->category->name}}</h6>
                                <h3 class="post-name"><a href="{{ url('/p/'.$post->slug) }}"><strong>{{$post ->title}}</strong></a></h3>
                            </div>
                            <p>
                              {!! str_limit($post->body, $limit = 60, $end = '......') !!}
                            </p>
                            <ul class="blog-meta">
                                <li class="post-date">{{ $post->created_at->diffForHumans() }}</li>
                                <li class="post-comments"><i class="fa fa-comments"></i> 3</li>
                                <li class="post-author"><a href="/about-me"><img src="files/uploads/avatar-3.jpg"><span>by Mulia Ichsan</span></a></li>
                            </ul>
                        </div>
                    </div>

                @endforeach

                </div> <!-- END #blog-grid .classic-blog -->

                <div class="spacer-medium"></div>

                <div  id="pagination">
                    {{ $posts->links() }}
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
                        <h6 class="widget-title uppercase">Recent Posts</h6>
                        <ul>
                          @foreach ($recent as $a)
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
            </aside> <!-- END .sidebar -->
            <div class="clear"></div>
            <div class="clear"></div>
            <br>
      	</div> <!-- END .wrapper -->
 	</section>
@endsection
