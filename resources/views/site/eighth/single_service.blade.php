@extends('site.eighth.layouts.app')

@section('content')

    <!--page title start-->
    <section class="page-title o-hidden text-center parallaxie" data-overlay="7" data-bg-img="{{ asset('site/part2/images/bg/02.jpg') }}">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 ml-auto mr-auto">
            <h1 class="title mb-0">Project <span>Details</span></h1>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('home.service_details') }}</li>
            </ol>
        </nav>
        </div>
    </section>
    <!--page title end-->


    <!--porfolio details start-->
    <section>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="left-sidebar">
                <div class="portfolio-details">
                    <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="owl-carousel owl-theme no-pb" data-dots="false" data-nav="true" data-items="1" data-autoplay="true">
                        <div class="item">
                            <img class="img-fluid w-100" src="{{ $service->service_image }}" alt="">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="section-title mb-3">
                        <h2 class="title">{{ __('home.service') }} <span> {{ __('home.details') }} </span></h2>
                        </div>
                        @php
                            $title = session('lang') . '_title';
                            $desc = session('lang') . '_description';
                        @endphp
                        <h2 class="title"> {{ $service->$title }} </h2>
                        <blockquote>{{ $service->$desc }}</blockquote>
                    </div>
                    </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!--portfolio details end-->

<!--portfolio slider start-->

  <section class="pt-0 pb-17 sm-pb-8">
    <div class="container">
      <div class="row mt-3">
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="title">{{ __('home.related') }} <span>{{ __('admin.services') }}</span></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme popup-gallery" data-items="3" data-md-items="2" data-sm-items="1" data-margin="30" data-autoplay="true">
            @foreach ($services as $index => $service)
            <div class="item">
                @php
                  $title = session('lang') . '_title';
                  $desc = session('lang') . '_description';
                @endphp
                <div class="portfolio-item">
                  <img src="{{ $service->service_image }}" alt="">
                  <div class="portfolio-hover">
                    <div class="portfolio-title"> <span>{{ $service->$title }}</span>
                      <h4>{{ substr($service->$desc, 0 , 30) }}</h4>
                    </div>
                    <div class="portfolio-icon">
                      <a class="popup portfolio-link" target="_blank" href="{{ route('service.show', ['id'=> $service->id, 'title'=> $service->$title]) }}"> <i class="flaticon-broken-link-1"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--portfolio slider end-->

@endsection
