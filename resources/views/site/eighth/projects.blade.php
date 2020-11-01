@extends('site.eighth.layouts.app')

@section('content')

<!--page title start-->

<section class="page-title o-hidden text-center parallaxie" data-overlay="7" data-bg-img=" {{ asset('site/part2/images/bg/02.jpg') }} ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 ml-auto mr-auto">
          <h1 class="title mb-0">
              @if (session('lang') == 'ar')
                  {{ __('admin.our_projects') }}
              @else
                  {{ __('home.our') }} <span> {{ __('home.projects') }} </span>
              @endif
          </h1>
        </div>
      </div>
      <nav aria-label="breadcrumb" class="page-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"> {{ __('home.projects') }} </li>
        </ol>
      </nav>
    </div>
  </section>

  <!--page title end-->


<!--portfolio start-->
<section class="pb-17 sm-pb-8">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="grid row columns-3 popup-gallery">
              @foreach ($projects as $project)
              <div class="grid-item">
                <div class="portfolio-item">
                  <img src="{{ $project->project_image }}" alt="">
                  <div class="portfolio-hover">
                      @php
                          $title = session('lang') . '_title';
                          $desc = session('lang') . '_description';
                      @endphp
                    <div class="portfolio-title"> <span>{{ $project->$title }}</span>
                      <h4>{{ $project->$desc }}</h4>
                    </div>
                    <div class="portfolio-icon">
                      <a class="popup portfolio-link" href="#"> <i class="flaticon-broken-link-1"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
        </div>
        </div>
      </div>
      {{ $projects->appends(request()->query())->links() }}
    </div>
</section>

  <!--portfolio end-->
@endsection
