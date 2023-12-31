@extends('layouts.app')

@section('css')
	<link href="{{URL::asset('plugins/tippy/scale-extreme.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('plugins/tippy/material.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"> {{ __('Frontend Settings') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-globe mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('#')}}"> {{ __('Frontend Management') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Menu Header') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')

<div class="row">
    <div class="col-lg-8 m-auto col-12">
        <div class="card overflow-hidden border-0">
            <div class="card-header">
                <h3 class="card-title">Menu Items and header's Content</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.frontend.menuheader') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 col-sm-12">
                            @foreach ($siteContent->menus as $menu)
                                <div class="input-box">
                                    <h6>{{ $loop->iteration }}</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="menus[]" value="{{ $menu }}" autocomplete="off" />
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-md-12 col-sm-12">

                            <div class="input-box">
                                <h6>{{ __('Header Title') }}</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="header_title" value="{{ $siteContent->header_title }}" required />
                                </div>
                            </div>

                            <div class="input-box">
                                <h6>{{ __('Header Slug') }}</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="header_slug" value="{{ $siteContent->header_slug }}" required />
                                </div>
                            </div>

                            <div class="input-box">
                                <h6>{{ __('Header Description') }}</h6>
                                <div class="form-group">
                                <textarea class="form-control" type="text" id="header_description" name="header_description" required>{{ $siteContent->header_description }}</textarea>
                                </div>
                            </div>

                            <div class="input-box">
                                <h6>{{ __('Header button') }}</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="header_btn" value="{{ $siteContent->header_btn }}" required />
                                </div>
                            </div>

                            <div class="input-box">
                                <h6>{{ __('Header button link') }}</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="header_btn_link" value="{{ $siteContent->header_btn_link }}" required />
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card-header">
                        <h3 class="card-title">Header Bottom Icons</h3>
                    </div>

                    <div class="card border-0 special-shadow">
                        <div class="card-body">
                            <h6 class="fs-12 font-weight-bold mb-4">Primary Logo</h6>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box border">
                                        <img src="{{ asset($siteContent['header_bmin_1']) }}" alt="Main Logo" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box">
                                        <h6>{{ __('Upload 1st Icon') }}</h6>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="header_bmin_1" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box">
                                        <h6>{{ __('Upload 1st Icon Link') }}</h6>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="header_bminl_1" value="{{ $siteContent['header_bminl_1'] }}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box border">
                                        <img src="{{ asset($siteContent['header_bmin_2']) }}" alt="Main Logo" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box">
                                        <h6>{{ __('Upload 2nd Icon') }}</h6>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="header_bmin_2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box">
                                        <h6>{{ __('Upload 2nd Icon Link') }}</h6>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="header_bminl_2" value="{{ $siteContent['header_bminl_2'] }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box border">
                                        <img src="{{ asset($siteContent['header_bmin_3']) }}" alt="Main Logo" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box">
                                        <h6>{{ __('Upload 3rd Icon') }}</h6>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="header_bmin_3" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box">
                                        <h6>{{ __('Upload 3rd Icon Link') }}</h6>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="header_bminl_3" value="{{ $siteContent['header_bminl_3'] }}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box border">
                                        <img src="{{ asset($siteContent['header_bmin_4']) }}" alt="Main Logo" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box">
                                        <h6>{{ __('Upload 4th Icon') }}</h6>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="header_bmin_4" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-box">
                                        <h6>{{ __('Upload 4th Icon Link') }}</h6>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="header_bminl_4" value="{{ $siteContent['header_bminl_4'] }}" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="border-0 text-right mb-2 mt-1">
                        <a href="http://127.0.0.1:8000/admin/dashboard" class="btn btn-cancel mr-2">Cancel</a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
