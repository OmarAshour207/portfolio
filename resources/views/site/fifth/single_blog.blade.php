@extends('site.fifth.layouts.app')

@section('content')

<!--page title start-->

<section class="page-title o-hidden text-center parallaxie" data-overlay="7" data-bg-img=" {{ asset('site/part2/images/bg/02.jpg') }} ">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 ml-auto mr-auto">
          <h1 class="title mb-0"> {{ __('home.blog_details') }} <span> {{ $blog->ar_name }} </span></h1>
        </div>
      </div>
      <nav aria-label="breadcrumb" class="page-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page"> {{ __('home.blogs') }} </li>
        </ol>
      </nav>
    </div>
  </section>

  <!--page title end-->


<!--blog start-->
<section class="pb-17 sm-pb-8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="left-side">
            <div class="post-image">
              <img class="img-fluid" src="{{ $blog->blog_image }}" alt="">
            </div>
            <div class="blog-details">
              <div class="post-desc">
                <div class="post-date mb-3">{{ $blog->created_at->format('d M y') }}</div>
                @php
                    $title = session('lang') . '_title';
                    $content = session('lang') . '_content';
                @endphp
                <div class="post-title">
                  <h4>{{ $blog->$title }}</h4>
                </div>
                <p class="mb-0 line-h-3">{!! $blog->$content !!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
 <!--blog end-->

@endsection
