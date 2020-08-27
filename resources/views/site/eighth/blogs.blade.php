@extends('site.eighth.layouts.app')

@section('content')
<!--page title start-->

<section class="page-title o-hidden text-center parallaxie" data-overlay="7" data-bg-img="{{ asset('site/part2/images/bg/02.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 ml-auto mr-auto">
          <h1 class="title mb-0">{{ __('home.blogs') }} </h1>
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
        @foreach ($blogs as $blog)
        <div class="col-lg-4 col-md-6">
            @php
                $title = session('lang') . '_title';
                $content = session('lang') . '_content';
            @endphp
          <div class="blog-classic">
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
                <p> {!! substr($blog->$content, 0, 30) !!} </p>
              </div>
              <div class="post-bottom">
                <a class="post-btn" href="{{ url('blogs/' . $blog->id .'/'.$blog->$title) }}">
                    {{ __('home.read_more') }}<i class="mr-2 fas fa-long-arrow-alt-left"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-sm-12">
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                {{ $blogs->appends(request()->query())->links() }}
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!--blog end-->


@endsection
