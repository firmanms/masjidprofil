@extends('frontend.layouts.app')

@section('title','Kas Masjid '.$profil->nama_masjid)
@section('content')

    <!-- Hero Section -->
    @include('frontend.partial.kastitle')
    <!-- /Hero Section -->

    <!-- About Section -->
    @include('frontend.partial.kassection')
    <!-- /About Section -->

@endsection
@section('title', $profil->nama_masjid )
@section('ogtitle', $profil->nama_masjid )
@section('seo', $profil->seo )
@section('description', $profil->seo_desc )
@section('site_name', $profil->nama_masjid )
@section('image',  url('storage/'.$profil->logo .'') )
