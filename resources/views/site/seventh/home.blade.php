@extends('site.seventh.layouts.app')

@section('content')

    <!--hero section start-->

    <section class="banner p-0 pos-r fullscreen-banner">
        <div class="banner-slider owl-carousel no-pb" data-dots="false">
            @foreach ($sliders as $index => $slider)
                <div class="item" data-bg-img="{{ $slider->slider_image }}" data-overlay="7"></div>
                @if ($index == 2)
                    @break
                @endif
            @endforeach
        </div>
        <div class="align-center">
            <div class="container">
                <div class="row">
                    @foreach ($sliders as $index => $slider)
                        <div class="col-xl-10 col-lg-10 col-md-12 ml-auto mr-auto">
                            <div class="banner-text">
                                @php
                                $title = session('lang') . '_title';
                                $desc = session('lang') . '_description';
                                @endphp
                                <img id="bnr-logo" class="img-center animated11"
                                    src="{{ asset('site/part2/images/logo-m.png') }}" alt="">
                                <h1 class="text-white mb-4 animated6">{!! $slider->$title !!}</h1>
                                <p class="lead text-white animated5">
                                    {!! $slider->$desc !!}
                                </p>
                                <a class="btn btn-theme btn-radius animated7"
                                    href="{{ url('about') }}">{{ __('home.learn_more') }}</a>
                                <a class="btn btn-border btn-radius animated6"
                                    href="{{ url('contact-us') }}">{{ __('admin.contact_us') }}</a>
                            </div>
                        </div>
                        @if ($index == 0)
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--hero section end-->


    <!--body content start-->
    @if ($page_filter != null)
        <div class="page-content">
            <!--service start-->
            @if (in_array('our_services', $page_filter))
                <section>
                    <div class="container">
                        <div class="row">
                            @foreach ($services as $index => $service)
                                <div class="col-lg-4 col-md-6 mt-5">
                                    <div class="service-box">
                                        <div class="service-flip theme-bg">
                                            <div class="service-flip-images service-flip-front"
                                                data-bg-img="{{ $service->service_image }}">
                                                @php
                                                $title = session('lang') . '_title';
                                                $desc = session('lang') . '_description';
                                                @endphp
                                                <div class="service-flip-title">
                                                    <h5>{{ $service->$title }}</h5>
                                                </div>
                                                <div class="flip-icon"> <i class="flaticon-industrial-robot"></i>
                                                </div>
                                            </div>
                                            <div class="service-flip-desc service-flip-back">
                                                <div class="service-flip-text"> <i class="flaticon-industrial-robot"></i>
                                                    <p>
                                                        {{ $service->$desc }}
                                                    </p>
                                                    <a class="btn-simple"
                                                        href="{{ route('service.show', ['id' => $service->id, 'title' => $service->$title]) }}">
                                                        {{ __('home.read_more') }} <i class="fas fa-arrow-left"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @endif
            <!--service end-->


            <!--about us start-->
            @if (in_array('about', $page_filter))
                <section>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                                <div class="section-title">
                                    <h2 class="title">{{ __('home.about_our') }} <span>{{ __('home.company') }}</span></h2>
                                    <p class="mb-0">
                                        @php
                                        $desc = session('lang') . '_description';
                                        @endphp
                                        {{ $aboutUs->$desc }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12">
                                <div class="row">
                                    <div class="col-md-6 pr-2">
                                        @foreach ($services as $index => $service)
                                            <div class="about-img {{ $index == 0 ? 'mb-3' : '' }}">
                                                <img class="img-fluid" src="{{ $service->service_image }}" alt="">
                                            </div>
                                            @if ($index == 1)
                                                @break
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-6 mt-4 pl-2">
                                        @foreach ($services as $index => $service)
                                            @if ($index > 1 && $index < 4)
                                                <div class="about-img {{ $index == 2 ? 'mb-3' : '' }}">
                                                    <img class="img-fluid" src="{{ $service->service_image }}" alt="">
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-12 box-shadow white-bg px-4 py-4 sm-px-3 sm-py-3 xs-py-2 xs-px-2 md-mt-5">
                                <h5>{{ __('home.what_we_do') }}</h5>
                                <p class="line-h-3">
                                    @php
                                    $desc = session('lang') . '_description';
                                    @endphp
                                    {{ $aboutUs->$desc }}
                                </p>
                                <div class="row text-black mt-4">
                                    <div class="col-sm-6">
                                        <ul class="list-unstyled">
                                            @foreach ($services as $index => $service)
                                                @php
                                                $title = session('lang') . '_title';
                                                @endphp
                                                <li class="mb-2">- {{ $service->$title }}</li>
                                                @if ($index == 2)
                                                    @break
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 xs-mt-3">
                                        <ul class="list-unstyled">
                                            @foreach ($services as $index => $service)
                                                @if ($index > 2 && $index < 6)
                                                    @php
                                                    $title = session('lang') . '_title';
                                                    @endphp
                                                    <li class="mb-2">- {{ $service->$title }}</li>
                                                @endif

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            <!--about us end-->

            <!--project start-->
            @if (in_array('our_projects', $page_filter))
                <section class="pb-5">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                                <div class="section-title">
                                    <h2 class="title">{{ __('home.latest') }} <span> {{ __('home.projects') }}</span></h2>
                                    <p class="mb-0">Misto Provide Greate Services for elit. Excepturi vero aliquam id. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="masonry row columns-4 popup-gallery">
                                    <div class="grid-sizer"></div>
                                    @foreach ($projects as $index => $project)
                                        <div class="masonry-brick cat3">
                                            <div class="portfolio-item">
                                                <img src="{{ $project->project_image }}" alt="">
                                                <div class="portfolio-hover">
                                                    <div class="portfolio-title"> <span> {{ __('home.projects') }} -
                                                            {{ $index + 1 }} </span>
                                                        @php
                                                        $title = session('lang') . '_title';
                                                        @endphp
                                                        <h4>{{ $project->$title }}</h4>
                                                    </div>
                                                    <div class="portfolio-icon">
                                                        <a class="popup popup-img" href="{{ $project->project_image }}"> <i
                                                                class="flaticon-magnifier"></i>
                                                        </a>
                                                        <a class="popup portfolio-link" target="_blank" href="#"> <i
                                                                class="flaticon-broken-link-1"></i>
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

            <!--counter start-->
            <section class="text-center grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="counter style-2"> <i class="flaticon-innovation"></i>
                                <span class="count-number" data-to="{{ $projects_count }}"
                                    data-speed="10000">{{ $projects_count }}</span>
                                <label>{{ __('admin.projects') }}</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="counter style-2 md-mt-5"> <i class="flaticon-coffee-cup"></i>
                                <span class="count-number" data-to="{{ $services_count }}"
                                    data-speed="10000">{{ $services_count }}</span>
                                <label>{{ __('admin.services') }}</label>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="counter style-2 md-mt-5"> <i class="flaticon-employee"></i>
                                <span class="count-number" data-to="{{ $team_count }}"
                                    data-speed="10000">{{ $team_count }}</span>
                                <label>{{ __('admin.team_members') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--counter end-->


            <!--team start-->
            @if (in_array('team_members', $page_filter))
                <section>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                                <div class="section-title">
                                    <h2 class="title">{{ __('home.meet_team') }}</h2>
                                    <p class="mb-0">Misto Engineers Services for elit. Excepturi vero aliquam id. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($teamMembers as $index => $teamMember)
                                <div class="col-lg-4 col-md-12 {{ $index != 0 ? 'md-mt-5' : '' }}">
                                    <div class="team-member text-center style-2">
                                        <div class="team-images">
                                            <img class="img-fluid" src="{{ $teamMember->member_image }}" alt="">
                                        </div>
                                        @php
                                        $title = session('lang') . '_title';
                                        $name = session('lang') . '_name';
                                        @endphp
                                        <div class="team-description"> <span>{{ $teamMember->$name }}</span>
                                            <h5><a href="#">{{ $teamMember->$title }}</a></h5>
                                            <div class="team-social-icon">
                                                <ul>
                                                    <li>
                                                        <a href="{{ setting('facebook') }}"><i
                                                                class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                      <a href="{{ setting('twitter') }}"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                      <a href="{{ setting('instagram') }}"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                </ul>
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
                </section>
            @endif
            <!--team end-->


            <!--blog start-->
            @if (in_array('latest_blog', $page_filter))
              <section>
                <div class="container">
                  <div class="row text-center">
                    <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                      <div class="section-title">
                        <h2 class="title">{{ __('home.latest') }} <span> {{ __('home.news') }}</span></h2>
                        <p class="mb-0">Misto Provide Greate Services for elit. Excepturi vero aliquam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    @foreach ($blogs as $index => $blog)
                    <div class="col-lg-5">
                      @php
                        $title = session('lang') . '_title';
                        $content = session('lang') . '_content';
                      @endphp
                      <div class="post style-2">
                        <div class="post-image">
                          <img src="{{ $blog->blog_image }}" alt="">
                          <div class="post-date">{{ $blog->created_at->format('d M y') }}</div>
                        </div>
                        <div class="post-desc">
                          <div class="post-title">
                            <h5>
                              <a href="{{ url('blogs/' . $blog->id . '/' . $blog->$title) }}">
                                {{ $blog->$title }}
                              </a>
                            </h5>
                          </div>
                          <p>{!! $blog->$content !!}</p>
                          <a class="post-btn" href="{{ url('blogs/' . $blog->id . '/' . $blog->$title) }}">{{ __('home.read_more') }}<i class="mr-2 fas fa-long-arrow-alt-left"></i></a>
                        </div>
                      </div>
                    </div>
                    @if ($index == 0)
                        @break
                    @endif
                    @endforeach
                    <div class="col-lg-7 md-mt-5">
                      @foreach ($blogs as $index => $blog)
                      @php
                        $title = session('lang') . '_title';
                        $content = session('lang') . '_content';
                      @endphp
                          @if ($index > 0)
                          <div class="post style-2 {{ $index == 2 ? 'mt-5' : '' }} ">
                            <div class="row no-gutters row-eq-height">
                              <div class="col-md-6">
                                <div class="post-image">
                                  <img class="h-100" src="{{ $blog->blog_image }}" alt="">
                                  <div class="post-date">{{ $blog->created_at->format('d M y') }}</div>
                                </div>
                              </div>
                              <div class="col-md-6 align-item-middle white-bg">
                                <div>
                                  <div class="post-desc">
                                    <div class="post-title">
                                      <h5>
                                        <a href="{{ url('blogs/' . $blog->id . '/' . $blog->$title) }}">
                                          {{ $blog->$title }}
                                        </a>
                                      </h5>
                                    </div>
                                    <p> {!! $blog->$content !!} </p>
                                    <a class="post-btn" href="{{ url('blogs/' . $blog->id . '/' . $blog->$title) }}">{{ __('home.read_more') }}<i class="mr-2 fas fa-long-arrow-alt-left"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endif
                          @if ($index == 2)
                              @break
                          @endif
                      @endforeach
                    </div>
                  </div>
                </div>
              </section>
            @endif
            <!--blog end-->


            <!--testimonial start-->
            @if (in_array('testimonials', $page_filter))
                <section>
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
                      @foreach ($testimonials as $index => $testimonial)
                      <div class="col-lg-4 col-md-12 {{ $index != 0 ? 'md-mt-5' : '' }} ">
                        <div class="testimonial style-2">
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
                            <p> {{ $testimonial->$desc }} </p>
                            <div class="testimonial-caption">
                              <h6>{{ $testimonial->$name }} -</h6>
                              <label>{{ $testimonial->$title }}</label>
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
                </section>
            @endif
            <!--testimonial end-->

        </div>

        <!--body content end-->
    @endif
@endsection
