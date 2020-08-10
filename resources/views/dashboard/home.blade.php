@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active" aria-current="page"><i class="material-icons icon-20pt"> {{ trans('admin.home') }} </i></li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> {{ trans('admin.dashboard') }} </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">
            <div class="card-group">
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-briefcase"></i></div>
                    <div class="text-amount"> {{ $services_count }} </div>
                    <div class="card-header__title mb-2"> {{ __('admin.services') }} </div>
                </div>
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-briefcase"></i></div>
                    <div class="text-amount">{{ $projects_count }}</div>
                    <div class="card-header__title  mb-2"> {{ __('admin.projects') }} </div>
                </div>
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-envelope"></i></div>
                    <div class="text-amount"> {{ $contacts_count }} </div>
                    <div class="card-header__title  mb-2">{{ __('admin.contacts') }}</div>
                </div>
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-check-circle"></i></div>
                    <div class="text-amount">{{ $testimonials_count }}</div>
                    <div class="card-header__title  mb-2">{{ __('admin.testimonials') }}</div>
                </div>
            </div>
            <div class="card-group">
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-user-friends"></i></div>
                    <div class="text-amount">{{ $members_count }}</div>
                    <div class="card-header__title  mb-2">{{ __('admin.team_members') }}</div>
                </div>
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-book-open"></i></div>
                    <div class="text-amount"> {{ $blogs_count }} </div>
                    <div class="card-header__title  mb-2">{{ __('admin.blogs') }}</div>
                </div>
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-eye"></i></div>
                    <div class="text-amount">{{ $visible_sections }}</div>
                    <div class="card-header__title  mb-2">{{ __('admin.visible_sections') }}</div>
                </div>
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-eye-slash"></i></div>
                    <div class="text-amount">{{ $hidden_sections }}</div>
                    <div class="card-header__title  mb-2">{{ __('admin.hidden_sections') }}</div>
                </div>
            </div>
            <div class="card-group">
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-paint-brush"></i></div>
                    <div class="text-amount">{{ $website_color }}</div>
                    <div class="card-header__title  mb-2">{{ __('admin.website_color') }}</div>
                </div>
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-user-friends"></i></div>
                    <div class="text-amount">{{ $visitors_count }}</div>
                    <div class="card-header__title  mb-2">{{ __('admin.visitors') }}</div>
                </div>
                <div class="card card-body text-center">
                    <div class="mb-1"><i class="icon-muted icon-40pt fa fa-user"></i></div>
                    <div class="text-amount">{{ $most_visited }}</div>
                    <div class="card-header__title  mb-2">{{ $most_visited_page .'  '.  __('admin.most_visited') }}</div>
                </div>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
