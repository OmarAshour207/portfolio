@extends('site.fifth.layouts.app')

@section('content')

<!--hero section start-->

<section class="banner p-0 pos-r fullscreen-banner">
    <div class="banner-slider owl-carousel no-pb" data-dots="false" data-nav="true">
       @foreach ($sliders as $index => $slider)
       <div class="item" data-bg-img="{{ $slider->slider_image }}" data-overlay="6">
        <div class="align-center">
          <div class="container">
            <div class="row text-center">
              <div class="col-lg-10 col-md-12 mr-auto ml-auto">
                <h5 class="text-white mb-3 letter-space-3 animated6">{{ __('home.what_we_do') }}</h5>
                @php
                    $title = session('lang') . '_title';
                    $desc = session('lang') . '_description';
                @endphp
                <h1 class="text-white mb-3 animated8">
                    {!! $slider->$title !!}
                </h1>
                <p class="lead text-white animated5 mb-3">{!! $slider->$desc !!}</p>
                <a class="btn btn-theme btn-radius animated7" href="{{ url('about') }}}">{{ __('home.learn_more') }}</a>
                <a class="btn btn-border btn-radius animated6" href="{{ url('contact-us') }}">{{ __('admin.contact_us') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if ($index == 2)
          @break
      @endif
      @endforeach
    </div>
  </section>

  <!--hero section end-->

<!--body content start-->
@if ($page_filter != null)

<div class="page-content">

    @if (in_array('about', $page_filter))

    <!--about us start-->
    <section>
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
            <div class="about-img">
                    <img class="img-fluid w-100" src="{{ $aboutUs->about_image }}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 md-mt-5">
            <div class="row no-gutters">
                @foreach ($services as $index => $service)
                <div class="col-md-6 col-sm-6 mt-3">
                    <div class="featured-item text-center">
                    <div class="featured-icon"> <i class="flaticon-chat-bubble text-theme"></i>
                    </div>
                    @php
                        $title = session('lang') . '_title';
                        $desc = session('lang') . '_description';
                    @endphp
                    <div class="featured-title text-uppercase">
                        <h5> {{ $service->$title }} </h5>
                    </div>
                    <div class="featured-desc">
                        <p>{{ $service->$desc }}</p>
                    </div>
                    </div>
                </div>
                @if ($index == 3)
                    @break
                @endif
                @endforeach
        </div>
            </div>
        </div>
        </div>
    </section>
    <!--about us end-->
    @endif

    <!--counter start-->
    <section class="pt-0">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <div class="theme-bg px-3 py-5 text-white">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
            <div class="counter style-4">
                <span class="count-number" data-to="{{ $projects_count }}" data-speed="10000">{{ $projects_count }}</span>
                <label>{{ __('admin.projects') }}</label>
            </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            <div class="counter style-4">
                <span class="count-number" data-to="{{ $services_count }}" data-speed="10000">{{ $services_count }}</span>
                <label>{{ __('admin.services') }}</label>
            </div>
            </div>
            <div class="col-lg-4 col-sm-6">
            <div class="counter style-4 md-mt-3">
                <span class="count-number" data-to="{{ $team_count }}" data-speed="10000">{{ $team_count }}</span>
                <label>{{ __('admin.team_members') }}</label>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!--counter end-->

    <!--project start-->
    @if (in_array('our_projects', $page_filter))
    <section class="o-hidden">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="section-title">
                        <h2 class="title">{{ __('home.latest') }} <span> {{ __('home.projects') }} </span></h2>
                        <p class="mb-0">Misto Provide Greate Services for elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            <div class="masonry row columns-4 no-gutters popup-gallery">
                <div class="grid-sizer"></div>
                @foreach ($projects as $index => $project)
                <div class="masonry-brick">
                <div class="portfolio-item">
                    <img src="{{ $project->project_image }}" alt="">
                    <div class="portfolio-hover">
                        @php
                            $title = session('lang') . '_title';
                            $desc = session('lang') . '_description';
                        @endphp
                    <div class="portfolio-title"> <span>{{ $project->$title }}</span>
                        <h4>
                            <p>
                                @if (session('lang') == 'ar')
                                    {{ mb_substr($project->$desc, 0, 50) }}
                                @else
                                    {{ substr($project->$desc, 0, 50) }}
                                @endif
                            </p>
                        </h4>
                    </div>
                    <div class="portfolio-icon">
                        <a class="popup popup-img" href="{{ asset('site/part2/images/portfolio/large/01.jpg') }}"> <i class="flaticon-magnifier"></i>
                        </a>
                        <a class="popup portfolio-link" target="_blank" href="#"> <i class="flaticon-broken-link-1"></i>
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
    @endif
    <!--project end-->


    <!--service start-->
    @if (in_array('our_services', $page_filter))
    <section class="text-center pb-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 ml-auto mr-auto">
            <div class="section-title">
              <h2 class="title">
                  @if (session('lang') == 'ar')
                      {{ __('admin.our_services') }}
                  @else
                      {{ __('home.our') }} <span>{{ __('home.services') }}</span>
                  @endif
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-margin="30">
              @foreach ($services as $index => $service)
              @php
                  $title = session('lang') . '_title';
                  $desc = session('lang') . '_description';
              @endphp
              <div class="item">
                <div class="service-item">
                  <div class="service-images">
                    <img class="img-fluid" src="{{ $service->service_image }}" alt="">
                    <div class="service-icon"> <i class="flaticon-industrial-robot"></i>
                    </div>
                  </div>
                  <div class="service-description">
                      <h4>{{ $service->$title }}</h4>
                      <p> {{ $service->$desc }} </p>
                      <a href="{{ route('service.show', ['id'=> $service->id, 'title'=> $service->$title]) }}">{{ __('home.read_more') }} <i class="fas fa-arrow-left"></i></a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!--service end-->

        <br>
    <!--subscribe start-->
    <section class="dark-bg py-5" data-bg-img="{{ asset('site/part2/images/bg/01.jpg') }}" data-overlay="8">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-md-8 col-sm-12">
                <h3 class="text-white">{{ __('home.convert_idea') }} <span class="text-theme font-weight-bold"> {{ __('home.for_your_company') }} </span></h3>
            </div>
            <div class="col-md-4 col-sm-12 text-md-{{ session('lang') == 'en' ? 'left' : 'right' }} sm-mt-3">
                <a href="{{ url('contact-us') }}" class="btn btn-theme"><span>{{ __('admin.contact_us') }}</span></a>
            </div>
            </div>
        </div>
    </section>
    <!--subscribe end-->

<br>
<br>
    <!--testimonial start-->
    @if (in_array('testimonials', $page_filter))
    <section class="dark-bg parallaxie" data-bg-img="{{ asset('site/part2/images/bg/02.jpg') }}" data-overlay="9">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="section-title">
              <h2 class="title">
                  @if (session('lang') == 'ar')
                      {{ __('admin.testimonials') }}
                  @else
                      {{ __('home.our') }} <span> {{ __('home.testimonial') }} </span>
                  @endif
              </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="owl-carousel owl-theme" data-items="1" data-autoplay="true">
            @foreach($testimonials as $index => $testimonial)
              <div class="item">
                <div class="testimonial">
                  <div class="row">
                    <div class="col-lg-10 col-md-12 ml-auto mr-auto">
                      <div class="testimonial-avatar">
                        <div class="testimonial-img">
                          <img class="img-center" src="{{ $testimonial->testimonial_image }}" alt="">
                        </div>
                      </div>
                      <div class="testimonial-content"> <span><i class="fas fa-quote-left"></i></span>
                        @php
                            $desc = session('lang') . '_description';
                            $name = session('lang') . '_name';
                            $title = session('lang') . '_title';
                        @endphp
                        <p>{{ $testimonial->$desc }}</p>
                        <div class="testimonial-caption">
                          <h6>{{ $testimonial->$name }} -</h6>
                          <label>{{ $testimonial->$title }}</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @if ($index == 2)
                  @break
              @endif
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    @endif
    <!--testimonial end-->


    <!--team start-->
    @if (in_array('team_members', $page_filter))
    <section>
        <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
            <div class="section-title">
                <h2 class="title">{{ __('home.meet_team') }}</h2>
                <p class="mb-0">Misto Provide Greate Services for elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="owl-carousel owl-theme" data-items="3" data-sm-items="2" data-autoplay="true">
                @foreach ($teamMembers as $index => $teamMember)
                <div class="item">
                    @php
                        $title = session('lang') . '_title';
                        $name = session('lang') . '_name';
                    @endphp
                <div class="team-member text-center">
                <div class="team-images">
                <img class="img-fluid" src="{{ $teamMember->member_image }}" alt="">
                <div class="team-social-icon">
                    <ul>
                        <li><a href="{{ setting('facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li><a href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                </div>
                <div class="team-description">
                <h5><a href="#">{{ $teamMember->$name }}</a></h5>
                <span>{{ $teamMember->$title }}</span>
                </div>
                </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
        </div>
    </section>
    @endif
    <!--team end-->


    <!--blog start-->
    @if (in_array('latest_blog', $page_filter))
    <section class="pb-17 sm-pb-8">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-8 col-md-10 ml-auto mr-auto">
            <div class="section-title">
              <h2 class="title">{{ __('home.latest') }} <span> {{ __('home.news') }}</span></h2>
              <p class="mb-0">Latest News For Our Solution Services for elit. Excepturi vero aliquam id. Lorem ipsum dolor amet, consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <div class="row">
            @foreach ($blogs as $index => $blog)
            <div class="col-lg-4 col-md-12">
                @php
                    $title = session('lang') . '_title';
                    $content = session('lang') . '_content';
                @endphp
                <div class="post">
                  <div class="post-image">
                    <img src="{{ $blog->blog_image }}" alt="">
                    <div class="post-date">{{ $blog->created_at->format('d M y') }}</div>
                  </div>
                  <div class="post-desc">
                    <div class="post-title">
                      <h5>
                        <a href="{{ url('blogs/' . $blog->id .'/'.$blog->$title) }}">
                            {{ $blog->$title }}
                        </a>
                     </h5>
                    </div>
                      @if (session('lang') == 'ar')
                          {!! mb_substr($blog->$content, 0, 50)  !!} ...
                      @else
                          {!! substr($blog->$content, 0, 50)  !!} ...
                      @endif
                  </div>
                  <div class="post-bottom">
                    <div class="post-meta">
                    </div>
                    <a class="post-btn text-center" href="{{ url('blogs/' . $blog->id .'/'.$blog->$title) }}">
                        {{ __('home.read_more') }}<i class="mr-2 fas fa-long-arrow-alt-left"></i>
                    </a>
                  </div>
                </div>
              </div>

            @endforeach
        </div>
      </div>
    </section>
    @endif
    <!--blog end-->


</div>

<!--body content end-->
@endif
@endsection
