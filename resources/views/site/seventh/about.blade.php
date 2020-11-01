@extends('site.seventh.layouts.app')

@section('content')

    <!--page title start-->

    <section class="page-title o-hidden text-center parallaxie" data-overlay="7" data-bg-img="{{ asset('site/part2/images/bg/02.jpg') }}">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 ml-auto mr-auto">
            <h1 class="title mb-0">
                @if (session('lang') == 'ar')
                    {{ __('home.about_us') }}
                @else
                    {{ __('home.about') }} <span>{{ __('home.us') }}</span>
                @endif
            </h1>
            </div>
        </div>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ __('home.about_us') }}</li>
            </ol>
        </nav>
        </div>
    </section>
    <!--page title end-->

    <!--about start-->

<section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12">
          <div class="owl-carousel owl-theme no-pb" data-items="1" data-dots="false" data-nav="true">
            <div class="item">
              <img class="img-fluid w-100" src="{{ asset('site/part2/images/about/01.jpg') }}" alt="">
            </div>
            <div class="item">
              <img class="img-fluid w-100" src="{{ asset('site/part2/images/about/02.jpg') }}" alt="">
            </div>
            <div class="item">
              <img class="img-fluid w-100" src="{{ asset('site/part2/images/about/03.jpg') }}" alt="">
            </div>
            <div class="item">
              <img class="img-fluid w-100" src="{{ asset('site/part2/images/about/04.jpg') }}" alt="">
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 md-mt-3">
          <h2 class="title">
              @if (session('lang') == 'ar')
                  {{ __('home.about_us') }}
              @else
                  {{ __('home.about') }} <span>{{ __('home.us') }}</span>
              @endif
          </h2>
          <p class="lead text-black">
              @php
                  $desc = session('lang') . '_description';
              @endphp
              {{ $about->$desc }}
          </p>
            <a class="btn btn-sm btn-simple mt-2" href="{{ url('about') }}"><span>{{ __('home.read_more') }} <i class="fas fa-long-arrow-alt-left mr-2"></i></span></a>
        </div>
      </div>

    </div>
  </section>

  <!--about end-->


    <!--counter start-->
    <section class="grey-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="counter"> <i class="flaticon-innovation"></i>
                <span class="count-number" data-to="{{ $projects_count }}" data-speed="10000">{{ $projects_count }}</span>
                <label>{{ __('admin.projects') }}</label>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="counter"> <i class="flaticon-pencil"></i>
                <span class="count-number" data-to="{{ $services_count }}" data-speed="10000">{{ $services_count }}</span>
                <label>{{ __('admin.services') }}</label>
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="counter md-mt-3"> <i class="flaticon-employee"></i>
                <span class="count-number" data-to="{{ $team_count }}" data-speed="10000">{{ $team_count }}</span>
                <label>{{ __('admin.team_members') }}</label>
              </div>
            </div>
          </div>
        </div>
    </section>
      <!--counter end-->

      <!--testimonial start-->
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
      <!--testimonial end-->


      <!--team start-->
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
              @foreach ($teamMembers as $index => $teamMember)

              <div class="col-lg-4 col-md-12">
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
                        @php
                            $title = session('lang') . '_title';
                            $name = session('lang') . '_name';
                        @endphp
                      <h5>
                          <a href="#">{{ $teamMember->$name }}</a>
                      </h5>
                      <span>{{ $teamMember->$title }}</span>
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
      <!--team end-->
<br>
<br>
<br>

@endsection
