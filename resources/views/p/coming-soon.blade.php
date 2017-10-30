@extends('layouts.mastercopy')

@section('title')
  Coming Soon
@endsection

@section('content')

  <section id="page-body" class="notoppadding">

      	 <div class="fullwidth-section fullheight text-light" style="background:url({{ asset('files/uploads/coming.jpg')}}) center center; background-size:cover;">
          	<div class="fullwidth-content wrapper-small align-center">

              <img src="{{ asset('files/uploads/map-pin.png')}}" srcset="{{ asset('files/uploads/map-pin.png')}}">
              	<h1><strong>Sedang dalam <br>Pembuatan dan Perancangan</strong></h1>
              	<h5 class="subtitle-2">Don't worry, we will be soon<br>Please check back in sometime</h5>
                  <div class="spacer-medium"></div>
                  <a href="/" class="sr-button button-small button-4 rounded">Back to homepage</a>

              </div>
          </div>

   	</section>

@endsection
