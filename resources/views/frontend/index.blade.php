@extends('frontend.layouts.app')

@section('title','Masjid '.$profil->nama_masjid)
@section('content')
    <!-- Hero Section -->
    @include('frontend.partial.slider')
    <!-- /Hero Section -->

    <!-- About Section -->
    @include('frontend.partial.about')
    <!-- /About Section -->

    <!-- Jadwal Shalat Section -->
    @include('frontend.partial.jadwalshalat')
    <!-- /Jadwal Shalat Section -->

    <!-- Services Section -->
    @include('frontend.partial.layanan')
    <!-- /Services Section -->

    <!-- Event Posts Section -->
    @include('frontend.partial.listevent')
    <!-- /Event Posts Section -->


    <!-- Blog Pagination Section
    <section id="blog-pagination" class="blog-pagination section">
      <button  class="">aaa</button>

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section> /Blog Pagination Section -->

    <!-- Blog Posts Section -->
    @include('frontend.partial.listblog')
    <!-- /Blog Posts Section -->

    <!-- Blog Pagination Section
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>...</li>
            <li><a href="#">10</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>

    </section> /Blog Pagination Section -->

    <!-- Portfolio Section -->
    @include('frontend.partial.galeri')
    <!-- /Portfolio Section -->

    <!-- Clients Section -->
    @include('frontend.partial.iklan')
    <!-- /Clients Section -->
@endsection
@section('title', $profil->nama_masjid )
@section('ogtitle', $profil->nama_masjid )
@section('seo', $profil->seo )
@section('description', $profil->seo_desc )
@section('site_name', $profil->nama_masjid )
@section('image',  url('storage/'.$profil->logo .'') )
