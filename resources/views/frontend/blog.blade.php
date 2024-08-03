@extends('frontend.layouts.app')

@section('title','Blog Masjid '.$profil->nama_masjid)
@section('content')

    <!-- Hero Section -->
    @include('frontend.partial.blogpagetitle')
    <!-- /Hero Section -->

    <!-- About Section -->
    @include('frontend.partial.blogsection')
    <!-- /About Section -->

@endsection
@section('title', $profil->nama_masjid )
@section('ogtitle', $profil->nama_masjid )
@section('seo', $profil->seo )
@section('description', $profil->seo_desc )
@section('site_name', $profil->nama_masjid )
@section('image',  url('storage/'.$profil->logo .'') )
