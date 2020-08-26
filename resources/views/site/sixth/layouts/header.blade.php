<!--header start-->

<header id="site-header" class="header">
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="topbar-link text-right">
              <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="mailto:{{ setting('email') }}">
                        <i class="far fa-envelope-open"></i>
                        {{ setting('email') }}
                    </a>
                </li>
                <li class="list-inline-item">
                  <a href="tel:{{ setting('phone') }}"> <i class="fas fa-mobile-alt"></i>{{ setting('phone') }}</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 text-center">
            <div class="search-box">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control" required="" type="search" placeholder="{{ __('home.search') }}">
                <button class="btn" type="submit"><i class="fas fa-search"></i>
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 text-left">
            <div class="social-icons social-hover top-social-list text-left">
              <ul class="list-inline">
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
    <div id="header-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand logo" href="{{ url('/') }}">
                <img id="logo-img" class="img-center" src="{{ getLogo() }}" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <!-- Left nav -->
                <ul class="nav navbar-nav {{ session('lang') == 'en' ? 'ml-auto' : 'mr-auto' }}">

                    <li class="nav-item">
                        <a class="nav-link {{ setActiveHome('') }}" href="{{ url('/') }}">{{ __('home.home') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ setActive('about') }}" href="{{ url('about') }}">{{ __('admin.about') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ setActive('services') }}" href="{{ url('services') }}">{{ __('admin.our_services') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ setActive('projects') }}" href="{{ url('projects') }}">{{ __('admin.our_projects') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ setActive('blogs') }}" href="{{ url('blogs') }}">{{ __('admin.blogs') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ setActive('contact-us') }}" href="{{ url('contact-us') }}">{{ __('admin.contact_us') }}</a>
                    </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{ __('home.language') }}</a>
                    <ul class="dropdown-menu">
                        <li>
                             <a href="{{ url('lang/ar') }}"><i class="fa fa-flag"></i> {{ __('home.arabic') }}</a>
                        </li>
                        <li>
                             <a href="{{ url('lang/en') }}"><i class="fa fa-flag"></i> {{ __('home.english') }}</a>
                        </li>
                    </ul>
                  </li>

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!--header end-->
