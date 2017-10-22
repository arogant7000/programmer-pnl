@extends('layouts.master')

@section('title')
  {{$post->title}}
@endsection

@section('content')

  <!-- HERO  -->
<section id="hero" class="hero-big parallax-section text-light" data-parallax-image="{{ url('photos/post/'.$post->images) }}">

      <div id="page-title" class="wrapper align-center">
          <h5 class="subtitle-2"><a href="#">{{$post->category->name}}</a></h5>
          <h1><strong>{{$post->title}}</strong></h1>
          <ul class="blog-meta">
              <li class="post-date">{{ $post->created_at->format('d M Y \a\t h:i a') }}</li>
              <li class="post-author"><a href="{{ url('/user/'.$post->author_id) }}"><span>by {{ $post->author->name }}</span></a></li>
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

                <div id="share">
                    <ul>
                        <li class="facebook"><a href="#"><span>Share</span></a></li>
                        <li class="twitter"><a href="#"><span>Tweet</span></a></li>
                        <li class="googleplus"><a href="#"><span>Share</span></a></li>
                        <li class="pinterest"><a href="#"><span>Pin it</span></a></li>
                    </ul>
                </div>

                <div class="author-box">
                  <div class="author-image"><img src="files/uploads/avatar-3.jpg" alt="SEO NAME"></div>
                    <div class="author-details">
                      <h6 class="subtitle-2">Written by</h6>
                        <h5 class="author-name"><a href="#">{{ $post->author->name }}</a></h5>
                      <p class="author-desc">When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
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

                      var disqus_shortname = 'aronsmk';
                          @if (isset($slug))
                            var disqus_identifier = 'aronsmk-{{ $slug }}';
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
                            <a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a>
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
                            <li><a href="#">{{$cat->name}}</a></li>
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
                <li class="prev"><a href="blog-single-video-hero.html">Previous Post</a></li>
                <li class="back"><a href="blog-modern-fullwidth.html">Back to Blog</a></li>
                <li class="next"><a href="blog-single-sidebar-fullwidth.html">Next Post</a></li>
            </ul>
        </div>
  </section>

@endsection
