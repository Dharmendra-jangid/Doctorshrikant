@extends('layout.app')
@section('content')

<section class="hero-wrap hero-wrap-2" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{$livertreat->name}}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home.index')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{$livertreat->name}}<i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftc-no-pb constom">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                  <figure>
                    <img class="img-responsive" src="{{asset('livertreat')}}/{{$livertreat->image}}" alt="livertreatments ">
                  </figure>
              </div>
              <div class="col-lg-8 col-md-8 col-12">
               <p>@php
                   echo "{$livertreat->shortdescription}"
               @endphp</p>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12 col-md-12 col-12">
              <p>@php
                  echo "{$livertreat->description}"
              @endphp</p>
              </div>
          </div>
      </div>
  </section>

@endsection
