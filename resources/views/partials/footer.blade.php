
<footer id="footer" class="footer-dark text-light">
    <div class="footer-inner wrapper">

        <div class="column-section clearfix">
          <div class="column two-fifth">
              <div class="widget">
                  <img src="{{asset('files/uploads/logo-sudo-light.png')}}" srcset="files/uploads/logo-sudo-light.png">
                    <div class="spacer-mini"></div>
                    <p>Komunitas Pemrograman PNL.  <br>Komunitas mahasiswa dalam bidang pemograman, yang dibuat khusus bagi mahasiswa Politeknik Negeri Lhokseumawe untuk memenuhi kebutuhan mahasiswa siap menjalani berbagai event.</p>
                </div>

                 <div class="widget">
                    <ul class="socialmedia-widget hover-slide-1">
                        <li class="facebook"><a href="https://www.facebook.com/el.mulya10"></a></li>
                        <li class="twitter"><a href="https://www.twitter.com/chan_m17"></a></li>
                        <li class="instagram"><a href="https://www.instagram.com/ichsan_m_/"></a></li>
                    </ul>
                </div>

            </div>
          <div class="column one-fifth">
              <div class="widget">
                  <h6 class="widget-title uppercase">Quick Menu</h6>
                    <ul class="menu">
                      <li><a href="/p/about-me">About Me</a></li>
                      <li><a href="/p/about-team">About Us</a></li>
                      <li><a href="/p/service">Services</a></li>
                      <li><a href="/p/contact">Contact Us</a></li>
                      <li><a href="/p/faq">FAQ</a></li>
                    </ul>
                </div>
            </div>
          <div class="column one-fifth">
              <div class="widget">
                  <h6 class="widget-title uppercase">Categories</h6>
                    <ul class="menu">
                      @foreach ($category as $cat)
                        <li><a href="{{ url('/category/'.$cat->id)}}">{{$cat->name}}</a></li>
                      @endforeach
                    </ul>
                </div>
            </div>
          <div class="column one-fifth last-col">
              <div class="widget widget_recent_entries">
                    <h6 class="widget-title uppercase">Recent Posts</h6>
                    <ul>
                      @foreach ($recent as $a)
                        <li><a href="{{ url('/p/'.$a->slug) }}">{{$a ->title}}</a><span class="post-date">{{ $a->created_at->diffForHumans() }}</span></li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <a id="backtotop" href="#">Back to top</a>
    </div>

     <div class="copyright"><small>Copyright &copy; 2017 by Programmer PNL - Made with Love by <a href="/about_me">Mulia Ichsan</a></small></div>
</footer>
