<!-- Footer -->
<footer class="site-footer style1">
    <!-- newsletter part -->
    <div class="dlab-newsletter">
        <div class="container">
            <div class="ft-contact wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                <div class="ft-contact-bx">
                    <img src="{{ asset('site/images/icon/icon1.png') }}" alt=""/>
                    <h4 class="title">{{ trans('home.address') }}</h4>
                    <p>{{ setting(session('lang') . '_address') }}</p>
                </div>
                <div class="ft-contact-bx">
                    <img src="{{ asset('site/images/icon/icon2.png') }}" alt=""/>
                    <h4 class="title">{{ trans('phone') }}</h4>
                    <p>{{ setting('phone') }}</p>
                </div>
                <div class="ft-contact-bx">
                    <img src="{{ asset('site/images/icon/icon3.png') }}" alt=""/>
                    <h4 class="title">{{ trans('home.email_contact') }}</h4>
                    <p> {{ setting('email') }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- footer top part -->
    <div class="footer-top" style="background-image:url({{ asset('site/images/background/bg2.png') }}); background-size: contain;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="widget widget_about">
                        <h4 class="footer-title">About Industry</h4>
                        <p> {{ trans('home.short_lorem_ipsum') }} </p>
                        <a href="about-1.html" class="readmore"> {{ trans('home.read_more') }} </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="widget">
                        <h4 class="footer-title"> {{ trans('home.useful_links') }} </h4>
                        <ul class="list-2">
                            <li><a href="{{ url('about') }}">{{ trans('home.about_us') }}</a></li>
                            <li><a href="{{ url('services') }}">{{ trans('home.our_services') }}</a></li>
                            <li><a href="{{ url('projects') }}">{{ trans('home.our_projects') }}</a></li>
                            <li><a href="{{ url('contact-us') }}">{{ trans('home.contact_us') }}</a></li>
                            <li><a href="{{ url('blogs') }}">{{ trans('home.blogs') }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="widget widget_subscribe">
                        <h4 class="footer-title"> {{ trans('home.useful_links') }} </h4>
                        <p>{{ trans('home.any_question') }}</p>
                        <form class="dzSubscribe" action="https://industry.dexignzone.com/xhtml/script/mailchamp.php" method="post">
                            <div class="dzSubscribeMsg"></div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit" class="site-button fa fa-paper-plane-o"></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom part -->
    <div class="footer-bottom footer-line">
        <div class="container">
            <div class="footer-bottom-in">
                <div class="footer-bottom-logo"><a href="{{ url('/') }}"><img src="{{ asset('site/images/logo-light.png') }}" alt=""/></a></div>
                <div class="footer-bottom-social">
                    <ul class="dlab-social-icon dez-border">
                        @php
                            $socialSites = ['facebook', 'twitter', 'instagram'];
                        @endphp
                        @for($i = 0; $i < count($socialSites); $i++)
                            @if(setting($socialSites[$i]) != '')
                                <li>
                                    <a class="fa fa-{{ $socialSites[$i] }}" href="{{ setting($socialSites[$i]) }}"></a>
                                </li>
                            @endif
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
