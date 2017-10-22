<!-- HERO  -->
  @foreach ($post as $key => $value)
<section id="hero" class="hero-big text-light overlay-body parallax-section" data-parallax-image="{{ url('photos/post/'.$value->images) }}">


    <div id="page-title" class="wrapper align-center">
        <h5 class="subtitle-2"><a href="#">{{$value->category->name}}</a></h5>
        <h1><strong>{{$value->title}}</strong></h1>
        <div class="spacer-small"></div>
        <a href="{{ url('/p/'.$value->slug) }}" class="sr-button button-small button-4">Read More</a>
    </div> <!-- END #page-title -->

</section>
@endforeach
<!-- HERO -->
