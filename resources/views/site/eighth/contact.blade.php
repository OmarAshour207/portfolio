@extends('site.eighth.layouts.app')

@section('content')

<!--page title start-->

<section class="page-title o-hidden text-center parallaxie" data-overlay="7" data-bg-img="{{ asset('site/part2/images/bg/02.jpg') }}">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 ml-auto mr-auto">
          <h1 class="title mb-0">{{ __('home.contact') }} <span>{{ __('home.us') }}</span></h1>
        </div>
      </div>
      <nav aria-label="breadcrumb" class="page-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">{{ __('home.contact_us') }}</li>
        </ol>
      </nav>
    </div>
</section>

  <!--page title end-->


  <!--body content start-->

  <div class="page-content">

  <!--contact start-->

  <section class="contact-3 pt-lg-0 pb-0 o-hidden pos-r">
    <div class="contact-box">
      <div class="container">
        <div class="row row-eq-height no-gutters box-shadow">
          <div class="col-lg-6 col-md-12 order-lg-12">
            <div class="contact-main">
              <h2 class="title mb-4">{{ __('home.contact_us') }} <span> {{ __('home.for_help') }} </span></h2>
              <form id="contact-form" method="post" action="{{ route('send.contact') }}">
                @csrf
                <div class="messages"></div>
                <div class="form-group">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="{{ __('admin.full_name') }}" required="required" data-error="{{ __('validation.required') }}">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="{{ __('admin.email') }}" required="required" data-error="{{ __('validation.required') }}">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="{{ __('home.phone') }}">
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <textarea id="form_message" name="message" class="form-control" placeholder="{{ __('admin.message') }}" rows="4" required="required" data-error="{{ __('validation.required') }}"></textarea>
                  <div class="help-block with-errors"></div>
                </div>
                <button class="btn btn-border btn-radius"><span>{{ __('home.send') }}</span>
                </button>
              </form>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 dark-bg text-white px-5 py-5 parallaxie form-info order-lg-1 align-item-middle" data-bg-img="images/bg/07.jpg" data-overlay="8">
            <div>
              <h2 class="title text-white">{{ __('home.get_in') }} <span> {{ __('home.touch') }} !</span></h2>
              <p>{{ __('home.convert_idea') }}</p>
              <ul class="contact-info list-unstyled mt-4">
                <li class="mb-4"><i class="flaticon-paper-plane"></i><span>{{ __('admin.address') }}:</span>
                  <p>{{ setting(session('lang') . '_address') }}</p>
                </li>
                <li class="mb-4"><i class="flaticon-phone-call"></i><span>{{ __('home.phone') }}:</span><a href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a>
                </li>
                <li><i class="flaticon-message"></i><span>{{ __('home.email') }}</span><a href="mailto:{{ setting('email') }}"> {{ setting('email') }}</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid p-0 md-mt-5">
      <div class="row">
        <div class="col-sm-12">
          <div class="map iframe-h-2">
    </div>
        </div>
      </div>
    </div>
  </section>

  <!--contact end-->

  </div>

  <!--body content end-->



@endsection
