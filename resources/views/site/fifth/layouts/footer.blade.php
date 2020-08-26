<!--footer start-->

<footer class="footer dark-bg pt-10 sm-pt-8 pos-r" data-bg-img="{{ asset('site/part2/images/bg/09.png') }}" style="background-size: contain; background-repeat: no-repeat;">
    <div class="contact-media">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="media-icon style-2 list-inline theme-bg">
              <li> <i class="flaticon-paper-plane"></i>
                <span>{{ __('admin.address') }}:</span>
                <p class="mb-0">{{ setting(session('lang') . '_address') }}</p>
              </li>
              <li> <i class="flaticon-phone-call"></i>
                <span>{{ __('home.phone') }}:</span>
                <a href="tel:+912345678900">{{ setting('phone') }}</a>
              </li>
              <li> <i class="flaticon-message"></i>
                <span>{{ __('home.email') }}:</span>
                <a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="primary-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h5>{{ __('home.about')}} <span class="text-theme"> {{ __('home.us') }}</span></h5>
            <p class="mb-3">Misto Industrial is fully responsible, Performance oriented theme. Build whatever you like with the Misto. Misto is the creative, modern and multipurpose HTML5 Template suitable for Your business.</p> <a class="btn-simple" href="{{ url('about') }}"><span>{{ __('home.read_more') }} <i class="mr-2 fas fa-long-arrow-alt-left"></i></span></a>
          </div>
          <div class="col-lg-3 col-md-6 sm-mt-5 footer-list">
            <h5>{{ __('home.useful') }} <span class="text-theme"> {{ __('home.links') }} </span></h5>
            <ul class="list-unstyled">
              <li>
                  <a href="{{ url('about') }}"><i class="fas fa-angle-left"></i> {{ __('home.about_us') }}</a>
              </li>
              <li>
                  <a href="{{ url('services') }}"><i class="fas fa-angle-left"></i> {{ __('admin.our_services') }}</a>
              </li>
              <li>
                  <a href="{{ url('projects') }}"><i class="fas fa-angle-left"></i> {{ __('admin.our_projects') }}</a>
              </li>
              <li>
                  <a href="{{ url('contact-us') }}"><i class="fas fa-angle-left"></i>{{ __('admin.contact_us') }}</a>
              </li>
              <li>
                  <a href="{{ url('blogs') }}l"><i class="fas fa-angle-left"></i> {{ __('admin.blogs') }}</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 md-mt-5 widget">
              <h5> {{ __('home.recent') }} <span class="text-theme"> {{ __('admin.services') }}</span></h5>
            <div class="recent-post mb-0">
              <ul class="list-unstyled">
                @foreach ($services as $index => $service)
                <li>
                    @php
                        $title = session('lang') . '_title';
                    @endphp
                    <a href="{{ route('service.show', ['id'=> $service->id, 'title'=> $service->$title]) }}">
                        <i class="fas fa-angle-left"></i> {{ $service->$title }}
                    </a>
                </li>
                @if ($index == 5)
                    @break
                @endif
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 md-mt-5">
            <h5>Working <span class="text-theme"> hours</span></h5>
            <p>Misto Working Hours amet elit, sed do eiusmod tempor dolore.</p>
            <ul class="list-unstyled working-hours clearfix">
              <li><span>Monday - Friday</span> 10:00 to 6:00</li>
              <li><span>Sunday</span> Closed</li>
            </ul>
            <div class="social-icons social-colored mt-3">
                <ul class="list-inline mb-0">
                    @php
                        $socialSites = ['facebook', 'twitter', 'instagram'];
                    @endphp
                    @for($i = 0; $i < count($socialSites); $i++)
                        @if(setting($socialSites[$i]) != '')
                            <li class="social-{{ $socialSites[$i] }}">
                                <a href="{{ setting($socialSites[$i]) }}">
                                    <i class="fab fa-{{ $socialSites[$i] }}"></i>
                                </a>
                            </li>
                        @endif
                    @endfor
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--footer end-->
