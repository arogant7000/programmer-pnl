@extends('layouts.mastercopy')

@section('title')
  Page Not Found
@endsection

@section('header')
  <header id="header" class="header-bordered">
		<div class="header-inner clearfix">


            <div id="logo" class="left-float">
                <a href="/">
                  <img id="scroll-logo" src="files/uploads/logo-sudo-scroll.png" srcset="files/uploads/logo-sudo-scroll.png 1x, files/uploads/logo-sudo-scroll@2x.png 2x" alt="Logo Scroll">
                  <img id="dark-logo" src="files/uploads/logo-sudo-dark.png" srcset="files/uploads/logo-sudo-dark.png 1x, files/uploads/logo-sudo-dark@2x.png 2x" alt="Logo Dark">
                  <img id="light-logo" src="files/uploads/logo-sudo-light.png" srcset="files/uploads/logo-sudo-light.png 1x, files/uploads/logo-sudo-light@2x.png 2x" alt="Logo Light">
                </a>
            </div>


            <div id="menu" class="right-float">
          <a href="#" class="responsive-nav-toggle"><span class="hamburger"></span></a>
                <div class="menu-inner">
                    <nav id="main-nav">
                        <ul>
                            <li class="menu-item-has-children"><a href="/">Home</a>
                            </li>

                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="submenu">
                                    <li class="menu-item-has-children"><a href="/p/about-me">About</a></li>
                                    <li class="menu-item-has-children"><a href="/p/service">Services</a></li>
                                    <li class="menu-item-has-children"><a href="/p/contact">Contact</a></li>
                                    <li class="menu-item-has-children"><a href="/p/contact">FAQ</a></li>
                                </ul>
                            </li>





                            <li class="menu-item-has-children mega-menu"><a href="/p/article">Blog</a></li>

                            <li class="menu-item-has-children"><a href="/p/coming-soon">Shop</a></li>
                        </ul>
                    </nav>

                    <div id="menu-misc" class="clearfix">


                        <div id="header-search">
                            <a href="#" id="show-search"><i class="fa fa-search"></i></a>
                            <div class="header-search-content">
                                <form action="/p/search" method="get">
                                    <a href="#" id="close-search"></a>
                                    <input type="text" name="q" class="form-control" value="" placeholder="Enter your search ...">
                                    <h5 class="subtitle-1">... & press enter to start</h5>
                                </form>
                                <div class="search-outer"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

    </div>
  </header>

@endsection

@section('content')

  <section id="page-body" class="notoppadding">

        <div class="fullwidth-section fullheight" style="background:#f5f6f7;">
          <div class="fullwidth-content wrapper-small align-center">
                <h1 class="error-404"><strong>404</strong></h1>
                <h3><strong>The Page you were looking for,<br>couldn't be found.</strong></h3>
                <div class="spacer-medium"></div>
                <a href="/" class="sr-button button-small button-4 rounded">Back to homepage</a>
          </div>
        </div>

  </section>

@endsection
