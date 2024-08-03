@extends('frontend.layouts.app')

@section('title',$galeri->judul)
@section('content')

    <!-- Hero Section -->
    @include('frontend.partial.galeridetailtitle')
    <!-- /Hero Section -->

    <!-- About Section -->
    @include('frontend.partial.galeridetailsection')
    <!-- /About Section -->

@endsection
@section('title', $profil->nama_masjid )
@section('ogtitle', $profil->nama_masjid )
@section('seo', $profil->seo )
@section('description', $profil->seo_desc )
@section('site_name', $profil->nama_masjid )
@section('image',  url('storage/'.$galeri->image .'') )
