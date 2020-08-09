@extends('site.layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($sliders as $index => $slider)
                    <div class="carousel-item {{ $index+1 == 1 ? 'active' : '' }}">
                        <img class="d-block w-100" style="height: 700px !important;" src="{{ $slider->slider_image }}" alt="image slide">
                        <div class="carousel-caption d-none d-md-block text-white">
                            @php
                                $title = session('lang') . '_title';
                                $desc = session('lang') . '_description';
                            @endphp
                            <div style="margin-bottom: 100px;"> {!! $slider->$title !!} </div>
                            <p> {!! $slider->$desc !!} </p>
                        </div>
                    </div>

                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Main Slider -->

        @if ($page_filter != null)
            <!-- contact area -->
            <div class="content-block">
                <!-- About Company -->
                <div class="section-full bg-gray content-inner about-carousel-ser">
                    <div class="container">
                        @if (in_array('about', $page_filter))
                            <div class="section-head text-center">
                                @php $desc = session('lang') . '_description'; @endphp
                                {!! $aboutUs->$desc !!}
                            </div>
                        @endif

                        @if (in_array('our_projects', $page_filter))
                            <div class="about-ser-carousel owl-carousel owl-theme owl-btn-center-lr owl-dots-primary-full owl-btn-3 m-b30 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                                @foreach($projects as $project)
                                <div class="item">
                                    <div class="dlab-box service-media-bx">
                                        <div class="dlab-media">
                                            <a href="{{ url('about') }}">
                                                <img src="{{ $project->project_image }}" class="lazy" data-src="{{ $project->project_image }}" alt=""></a>
                                        </div>
                                        <div class="dlab-info text-center">
                                            @php
                                                $title = session('lang') . '_title';
                                                $desc = session('lang') . '_description';
                                            @endphp
                                            <h2 class="dlab-title"><a href="#"> {{ $project->$title }} </a></h2>
                                            <p> {{ substr($project->$desc, 0, 30) }}  </p>
                                            <a href="{{ url('about') }}" class="site-button btnhover13">{{ __('home.read_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
                <!-- About Company END -->

            @if (in_array('contacts', $page_filter))
                <!-- Contacts  -->
                    <div class="section-full bg-img-fix content-inner-2 overlay-black-dark contact-action style2" style="background-image:url({{ asset('site/images/background/bg2.jpg') }});">
                        <div class="container">
                            <div class="row relative">
                                <div class="col-md-12 col-lg-8 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="contact-no-area">
                                        @php $desc = session('lang').'_description';@endphp
                                        <h2 class="title"> {{ $aboutUs->$desc }} </h2>
                                        <div class="contact-no">
                                            <div class="contact-left">
                                                <h3 class="no"><i class="sl-call-in"></i>{{ setting('phone') }}</h3>
                                            </div>
                                            <div class="contact-right">
                                                <a href="{{ url('contact') }}" class="site-button appointment-btn btnhover13"> {{ __('home.contact_us') }} </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4 contact-img-bx wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <img src="{{ $aboutUs->about_image }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Contacts END -->
            @endif

            @if (in_array('our_services', $page_filter))
                <!-- Our Services -->
                    <div class="section-full bg-gray content-inner">
                        <div class="container">
                            <div class="section-head text-center">
                                <h2 class="title"> {{ trans('home.our_services') }} </h2>
                                <p>{{ trans('home.lorem_ipsum') }}</p>
                            </div>
                            <div class="section-content row">
                                @foreach($services as $index => $service)
                                    @php
                                        $title = session('lang') . '_title';
                                        $desc = session('lang') . '_description';
                                    @endphp
                                    <div class="col-md-6 col-lg-4 col-sm-12 service-box style3 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                        <div class="icon-bx-wraper" data-name="0{{ $index+1 }}">
                                            <div class="icon-lg">
                                                <a href="{{ route('service.show', ['id'=> $service->id, 'title'=> $service->$title]) }}" class="icon-cell"><i class="flaticon-robot-arm"></i></a>
                                            </div>
                                            <div class="icon-content">
                                                <h2 class="dlab-tilte">{{ $service->$title }}</h2>
                                                <p> {{ $service->$desc }} </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Our Services End -->
            @endif

            @if (in_array('stats', $page_filter))
                <!-- Company staus -->
                    <div class="section-full text-white bg-img-fix content-inner overlay-black-dark counter-staus-box" style="background-image:url({{ asset('site/images/background/bg4.jpg') }});">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <div class="section-head text-white">
                                        <a href="https://www.youtube.com/watch?v=_FRZVScwggM" class="popup-youtube video play-btn"><span><i class="fa fa-play"></i></span>Play Now</a>
                                        <h2 class="title">{{ trans('home.stat_description') }}</h2>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12 col-sm-12">
                                    <div class="row sp20">
                                        <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                            <div class="icon-bx-wraper center counter-style-5">
                                                <div class="icon-xl m-b20">
                                                    <span class="icon-cell"><i class="flaticon-worker"></i></span>
                                                </div>
                                                <div class="icon-content">
                                                    <div class="dlab-separator bg-primary"></div>
                                                    <h2 class="dlab-tilte counter">1226</h2>
                                                    <p>{{ trans('home.happy_client') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                            <div class="icon-bx-wraper center counter-style-5">
                                                <div class="icon-xl m-b20">
                                                    <span class="icon-cell"><i class="flaticon-settings"></i></span>
                                                </div>
                                                <div class="icon-content">
                                                    <div class="dlab-separator bg-primary"></div>
                                                    <h2 class="dlab-tilte counter">1552</h2>
                                                    <p>{{ trans('home.workers_hand') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                                            <div class="icon-bx-wraper center counter-style-5">
                                                <div class="icon-xl m-b20">
                                                    <span class="icon-cell"><i class="flaticon-conveyor-1"></i></span>
                                                </div>
                                                <div class="icon-content">
                                                    <div class="dlab-separator bg-primary"></div>
                                                    <h2 class="dlab-tilte counter">1156</h2>
                                                    <p>{{ trans('home.active_experts') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Company staus End -->
            @endif

            @if (in_array('team_members', $page_filter))
                <!-- Team member -->
                    <div class="section-full bg-gray content-inner">
                        <div class="container">
                            <div class="section-head text-center ">
                                <h2 class="title">{{ trans('home.meet_team') }}</h2>
                                <p>T{{ trans('home.lorem_ipsum') }}</p>
                            </div>
                            <div class="row">
                                @foreach($teamMembers as $teamMember)
                                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.4s">
                                    <div class="dlab-box m-b30 dlab-team1">
                                        <div class="dlab-media">
                                            <a href="team-1.html">
                                                <img width="358" height="460" alt="" src="{{ $teamMember->member_image }}" class="lazy" data-src="{{ $teamMember->member_image }}">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            @php
                                            $name = session('lang') . '_name';
                                            $title = session('lang') . '_title';
                                            @endphp
                                            <h4 class="dlab-title">{{ $teamMember->$name }}</h4>
                                            <span class="dlab-position">{{ $teamMember->$title }}</span>
                                            <ul class="dlab-social-icon dez-border">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Team member End -->
            @endif

            @if (in_array('testimonials', $page_filter))
                <!-- Testimonials blog -->
                    <div class="section-full overlay-black-middle bg-secondry content-inner-2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" style="background-image:url({{ asset('site/images/background/map-bg.png') }});">
                        <div class="container">
                            <div class="section-head text-white text-center">
                                <h2 class="title">{{ trans('home.what_people_say') }}</h2>
                                <p> {{ trans('home.lorem_ipsum') }} </p>
                            </div>
                            <div class="section-content">
                                <div class="testimonial-two-dots owl-carousel owl-none owl-theme owl-dots-primary-full owl-loaded owl-drag">
                                    @foreach($testimonials as $testimonial)
                                        <div class="item">
                                        <div class="testimonial-15 text-white">
                                            <div class="testimonial-text quote-left quote-right">
                                                @php
                                                    $desc = session('lang') . '_description';
                                                    $name = session('lang') . '_name';
                                                    $title = session('lang') . '_title';
                                                @endphp
                                                <p>{{ $testimonial->$desc }}</p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <div class="testimonial-pic radius shadow"><img src="{{ $testimonial->testimonial_image }}" width="100" height="100" alt=""></div>
                                                <strong class="testimonial-name">{{ $testimonial->$name }}</strong> <span class="testimonial-position">{{ $testimonial->$title }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonials blog End -->
            @endif

            @if (in_array('latest_blog', $page_filter))
                <!-- Latest blog -->
                    <div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <div class="container">
                            <div class="section-head text-center">
                                <h2 class="title"> {{ trans('home.latest_blog') }} </h2>
                                <p>{{ trans('home.lorem_ipsum') }}</p>
                            </div>
                            <div class="blog-carousel owl-none owl-carousel">
                                @foreach($blogs as $blog)
                                <div class="item">
                                    @php
                                    $title = session('lang') . '_title';
                                    $author = session('lang') . '_author';
                                    $content = session('lang') . '_content';
                                    @endphp
                                    <div class="blog-post post-style-1">
                                        <div class="dlab-post-media dlab-img-effect rotate">
                                            <a href="{{ url('blogs/' . $blog->id .$blog->$title) }}"><img src="{{ $blog->blog_image }}" alt=""></a>
                                        </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-date">
                                                        <strong>{{ $blog->created_at->format('d M') }}</strong>
                                                        <span> {{ $blog->created_at->format('Y') }}</span>
                                                    </li>
                                                    <li class="post-author"> {{ __('home.by') . $blog->$author }} </li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-title">
                                                <h3 class="post-title"><a href="{{ url('blogs/' . $blog->id .$blog->$title) }}">{!!  substr($blog->$content, 0, 20) !!}</a></h3>
                                            </div>
                                            <div class="dlab-post-readmore">
                                                <a href="{{ url('blogs/' . $blog->id . '/' . $blog->$title) }}" title="READ MORE" rel="bookmark" class="site-button btnhover13">{{ __('home.read_more') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Latest blog END -->
                @endif
            </div>
        @endif

    </div>
    <!-- Content END-->
@endsection
