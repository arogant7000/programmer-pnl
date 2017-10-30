@extends('layouts.master')

@section('title')
  {{$post->title}}
@endsection

@section('content')


<section id="hero" class="hero-big parallax-section text-light" data-parallax-image="{{ url('photos/post/'.$post->images) }}">

      <div id="page-title" class="wrapper align-center">
          <h5 class="subtitle-2"><a href="{{ url('/category/'.$post->category->id)}}">{{$post->category->name}}</a></h5>
          <h1><strong>{{$post->title}}</strong></h1>
          <ul class="blog-meta">
              <li class="post-date">{{ $post->created_at->format('d M Y \a\t h:i a') }}</li>
              <li class="post-author"><a href="/about_me"><span>by {{ $post->author->name }}</span></a></li>
          </ul>
      </div>
      <a href="#" id="scroll-down"></a>

  </section>


  <section id="page-body">

      <div class="wrapper">

            <div id="blog-single" class="main-content left-float">

                <div class="post-content">
                  {!! $post->body !!}
                </div>

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

                </div>

            </div>

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
