<!--footer start-->

<footer class="footer footer-2 dark-bg pos-r">
    <div class="primary-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-logo mb-3">
                        <img id="footer-logo-img" class="img-center" src="{{ getLogo() }}" alt="">
                    </div>
                    <p class="mb-3">Misto Industrial is fully responsible, Performance oriented theme. Misto is the
                        creative, modern and multipurpose HTML5 Template suitable for Your business.</p>
                    <ul class="list-unstyled working-hours clearfix">
                        <li><span>Monday - Friday</span> 10:00 to 6:00</li>
                        <li><span>Sunday</span> Closed</li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 sm-mt-5 footer-list pl-md-5">
                    <h5>{{ __('home.useful') }} <span class="text-theme">  {{ __('home.links') }} </span></h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ url('about') }}"><i class="fas fa-angle-left"></i> {{ __('home.about_us') }}</a>
                        </li>
                        <li>
                            <a href="{{ url('services') }}"><i class="fas fa-angle-left"></i>
                                {{ __('admin.our_services') }}</a>
                        </li>
                        <li>
                            <a href="{{ url('projects') }}"><i class="fas fa-angle-left"></i>
                                {{ __('admin.our_projects') }}</a>
                        </li>
                        <li>
                            <a href="{{ url('contact-us') }}"><i
                                    class="fas fa-angle-left"></i>{{ __('admin.contact_us') }}</a>
                        </li>
                        <li>
                            <a href="{{ url('blogs') }}l"><i class="fas fa-angle-left"></i> {{ __('admin.blogs') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 md-mt-5 footer-list">
                    <h5>Our <span class="text-theme"> Solutions</span></h5>
                    <ul class="list-unstyled">
                        @foreach ($services as $index => $service)
                            <li>
                                @php
                                    $title = session('lang') . '_title';
                                @endphp
                                <a
                                    href="{{ route('service.show', ['id' => $service->id, 'title' => $service->$title]) }}">
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
            <div class="row mt-5 ">
                <div class="col-md-12">
                    <ul class="media-icon style-2 list-inline theme-bg">
                        <li> <span>{{ __('admin.address') }}:</span>
                            <p class="mb-0"> {{ setting(session('lang') . '_address') }} </p>
                        </li>
                        <li class="white-bg"> <span>{{ __('home.phone') }}:</span>
                            <a href="tel:{{ setting('phone') }}"> {{ setting('phone') }} </a>
                        </li>
                        <li> <span>{{ __('home.email') }}:</span>
                            <a href="mailto:{{ setting('email') }}">{{ setting('email') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
