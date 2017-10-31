@extends('layouts.master')

@section('title')
  About Me
@endsection

@section('content')
  <section id="hero" class="hero-big parallax-section" data-parallax-image="{{ asset('files/uploads/me.jpg') }}">

        <div id="page-title" class="wrapper title-bottom">
          <h4 style="color:red;"><strong>Hallo, Saya Mulia Ichsan</strong></h4>
            <h5 style="color:red;">Programmer dan Wakil Ketua Komunitas Pemrograman PNL</h5>
        </div> <!-- END #page-title -->

    </section>
    <!-- HERO -->


  <!-- PAGEBODY -->
  <section id="page-body" class="notoppadding">

        <div class="column-section boxed-sticky adapt-height vertical-center clearfix">
          <div class="column one-half bigpadding">
              <div class="spacer-medium"></div>
              <p>Saya seorang mahasiswa Teknik Informatika pada Politeknik Negeri Lhokseumawe. Sebagai mahasiswa IT, Programming dapat dikatakan adalah sebagai hobi.</p>
              <p>Sedikit keahlian yang saya miliki adalah kegemaran saya dalam bahasa Java, dan mendalami tentang Cisco Networking dikarenakan saya termasuk kedalam anggota Cisco Networking Academy Politeknik Aceh.</p>
              <p>Selain itu saya hobi dalam Pemrograman Web, serta mendalami tentang Framework dalam web. Sehingga saya memutuskan membuat website ini untuk tujuan pembelajaran saya dengan sedikit kemampuan saya.</p>
              <div class="spacer-medium"></div>
            </div>
            <div class="column one-half bigpadding last-col" style="background:#dce7eb;">
              <blockquote>
                Kalau hidup sekedar hidup, babi hutan juga hidup. <br> Kalau bekerja sekedar bekerja, kera juga bekerja
                    <cite>Buya Hamka</cite>
                </blockquote>
            </div>
        </div> <!-- END .column-section -->


  </section>
  <!-- PAGEBODY -->
@endsection
