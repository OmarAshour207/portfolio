@extends('site.eighth.layouts.app')

@section('content')

<!--page title start-->
<section class="page-title o-hidden text-center parallaxie" data-overlay="7" data-bg-img="{{ asset('site/part2/images/bg/02.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 ml-auto mr-auto">
          <h1 class="title mb-0">{{ __('home.our') }} <span>{{ __('home.services') }}</span></h1>
        </div>
      </div>
      <nav aria-label="breadcrumb" class="page-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('home.our_services') }}</li>
        </ol>
      </nav>
    </div>
</section>
<!--page title end-->

<section class="pb-17 sm-pb-8">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="grid row columns-2 popup-gallery">
              @foreach ($services as $service)
              @php
                  $title = session('lang') . '_title';
                  $desc = session('lang') . '_description';
              @endphp
              <div class="grid-item">
                <div class="portfolio-item">
                  <img src="{{ $service->service_image }}" alt="">
                  <div class="portfolio-hover">
                    <div class="portfolio-title"> <span>{{ $service->$title }}</span>
                      <h4>{{ $service->$desc }}</h4>
                    </div>
                    <div class="portfolio-icon">
                      <a class="popup popup-img" href="{{ route('service.show', ['id'=> $service->id, 'title'=> $service->$title]) }}"> <i class="flaticon-magnifier"></i>
                      </a>
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
    {{ $services->appends(request()->query())->links() }}
  </section>


@endsection
