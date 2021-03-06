@push('admin_scripts')
    <script type="text/javascript">
        var url = window.location.href;
        var path = url.split('/')[4];
        Dropzone.autoDiscover = false;
        $(document).ready(function () {
            $('#mainphoto').dropzone({
                url: '{{ route('upload.image') }}',
                paramName:'image',
                autoDiscover: false,
                uploadMultiple: false,
                maxFiles: 1,
                acceptedFiles: 'image/*',
                dictDefaultMessage: '{{ __('admin.upload_photo') }}',
                dictRemoveFile: '<button class="btn btn-danger"> <i class="fa fa-trash center"></i></button>',
                params: {
                    _token: '{{ csrf_token() }}',
                    path: path,
                    width: 500,
                    height: 600
                },
                addRemoveLinks: true,
                removedfile:function (file) {
                    var imageName = $('.image_name').val();
                    $.ajax({
                        dataType: 'json',
                        type: 'POST',
                        url: '{{ route('remove.image') }}',
                        data: {
                            _token: '{{ csrf_token() }}',
                            image: imageName,
                            path: path
                        }
                    });
                    var fmock;
                    return (fmock = file.previewElement) != null ? fmock.parentNode.removeChild(file.previewElement): void 0;
                },
                init: function () {

                        @if(!empty($teamMember->image))
                        @php $title = session('lang') . '_title'; @endphp
                    var mock = { name: '{{ $teamMember->$title }}', size: 2};
                    this.emit('addedfile', mock);
                    this.emit('thumbnail', mock, '{{ $teamMember->teamMember_image }}');
                    this.emit('complete', mock);
                    $('.dz-progress').remove();
                    @endif

                        this.on("success", function (file, image) {
                        $('.image_name').val(image);
                    })
                }
            });
        });
    </script>
    <style type="text/css">

        .dropzone {
            width: 200px;
            height: 90px;
            min-height: 0px !important;
            background-color: #1C2260;
            border: #1C2260;
        }
    </style>
@endpush

@extends('dashboard.layouts.app')

@section('content')
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}"><i class="material-icons icon-20pt">home</i> {{ trans('admin.home') }} </a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('admin.edit') }}</li>
                        </ol>
                    </nav>
                    <h1 class="m-0"> {{ trans('admin.team_members') }} </h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="card card-form__body card-body">
                <form method="post" action="{{ route('team-members.update', $teamMember->id) }}" enctype="multipart/form-data">
                    @csrf

                    @method('put')
                    @include('dashboard.partials._errors')

                    <div class="form-group">
                        <label for="ar_name"> {{ trans('admin.team_members') }} / {{ trans('admin.ar_name') }}</label>
                        <input id="ar_name" name="ar_name" type="text" class="form-control" placeholder="{{ __('admin.ar_name') }}" value="{{ $teamMember->ar_name }}">
                    </div>
                    <div class="form-group">
                        <label for="en_name"> {{ trans('admin.team_members') }} / {{ trans('admin.en_name') }}</label>
                        <input id="en_name" name="en_name" type="text" class="form-control" placeholder="{{ __('admin.en_name') }}" value="{{ $teamMember->en_name }}">
                    </div>

                    <div class="form-group">
                        <label for="ar_title"> {{ trans('admin.team_members') }} / {{ trans('admin.ar_title') }}</label>
                        <input id="ar_title" name="ar_title" type="text" class="form-control" placeholder="{{ __('admin.ar_title') }}" value="{{ $teamMember->ar_title }}">
                    </div>
                    <div class="form-group">
                        <label for="en_title"> {{ trans('admin.team_members') }} / {{ trans('admin.en_title') }}</label>
                        <input id="en_title" name="en_title" type="text" class="form-control" placeholder="{{ __('admin.en_title') }}" value="{{ $teamMember->en_title }}">
                    </div>

                    <div class="form-group">
                        <label for="ar_desc"> {{ trans('admin.team_members') }} / {{ trans('admin.ar_description') }}</label>
                        <textarea id="ar_desc" name="ar_description" rows="4" class="form-control" placeholder="{{ trans('admin.team_members') }} / {{ trans('admin.ar_description') }}...">{{ $teamMember->ar_description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="en_desc"> {{ trans('admin.team_members') }} / {{ trans('admin.en_description') }}</label>
                        <textarea id="en_desc" name="en_description" rows="4" class="form-control" placeholder="{{ trans('admin.team_members') }} / {{ trans('admin.en_description') }}...">{{ $teamMember->en_description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="ar_meta_tag"> {{ trans('admin.team_members') }} / {{ trans('admin.ar_meta_tag') }}</label>
                        <input id="ar_meta_tag" name="ar_meta_tag" type="text" class="form-control" placeholder="{{ trans('admin.ar_meta_tag') }}" value="{{ $teamMember->ar_meta_tag }}">
                    </div>
                    <div class="form-group">
                        <label for="en_meta_tag"> {{ trans('admin.team_members') }} / {{ trans('admin.en_meta_tag') }}</label>
                        <input id="en_meta_tag" name="en_meta_tag" type="text" class="form-control" placeholder="{{ trans('admin.en_meta_tag') }}" value="{{ $teamMember->en_meta_tag }}">
                    </div>

                    <div class="form-group">
                        <input class="image_name" type="hidden" name="image" value="{{ $teamMember->image }}">
                    </div>
                    <div class="form-group">
                        <label> {{ __('admin.photo') }} </label>
                        <div class="dropzone" id="mainphoto"></div>
                    </div>

                    <div class="text-right mb-5">
                        <input type="submit" name="add" class="btn btn-success" value="{{ trans('admin.update') }}">
                    </div>
                </form>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@endsection
