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
				<li class="breadcrumb-item"><a href=""><i class="fa fa-globe mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{url('#')}}"> {{ __('Frontend Management') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Footer Nav Menu Settings') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')

 <!-- Page body -->
 <div class="pt-6 page-body">
    <div class="container">
        <div class="card py-2 px-4 mt-2 w-8/12 mx-auto">
            <div class="card-header">
                <h3>Login & Signup page icons</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.settings.frontend.loginSignupPost') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <img src="{{ asset($webSiteContent['lnsp_bmin_1']) }}" alt="Site Icons" class="img-fluid my-2" width="100">
                    <div class="mb-3 input-box">
                        <label for="lnsp_bmin_1" class="form-label">{{ __('Upload 1st Icon') }}</label>
                        <input class="form-control" type="file" id="lnsp_bmin_1" name="lnsp_bmin_1">
                        <label for="lnsp_bminl_1" class="form-label">{{ __('Upload 1st Icon Link') }}</label>
                        <input class="form-control" type="text" id="lnsp_bminl_1" name="lnsp_bminl_1" value="{{ $webSiteContent['lnsp_bminl_1'] }}">
                    </div>

                    <img src="{{ asset($webSiteContent['lnsp_bmin_2']) }}" alt="Site Icons" class="img-fluid my-2" width="100">
                    <div class="mb-3 input-box">
                        <label for="lnsp_bmin_2" class="form-label">{{ __('Upload 2nd Icon') }}</label>
                        <input class="form-control" type="file" id="lnsp_bmin_2" name="lnsp_bmin_2">
                        <label for="lnsp_bminl_2" class="form-label">{{ __('Upload 2nd Icon Link') }}</label>
                        <input class="form-control" type="text" id="lnsp_bminl_2" name="lnsp_bminl_2" value="{{ $webSiteContent['lnsp_bminl_2'] }}">
                    </div>

                    <img src="{{ asset($webSiteContent['lnsp_bmin_3']) }}" alt="Site Icons" class="img-fluid my-2" width="100">
                    <div class="mb-3 input-box">
                        <label for="lnsp_bmin_3" class="form-label">{{ __('Upload 3rd Icon') }}</label>
                        <input class="form-control" type="file" id="lnsp_bmin_3" name="lnsp_bmin_3">
                        <label for="lnsp_bminl_3" class="form-label">{{ __('Upload 3rd Icon Link') }}</label>
                        <input class="form-control" type="text" id="lnsp_bminl_3" name="lnsp_bminl_3" value="{{ $webSiteContent['lnsp_bminl_3'] }}">
                    </div>

                    <img src="{{ asset($webSiteContent['lnsp_bmin_4']) }}" alt="Site Icons" class="img-fluid my-2" width="100">
                    <div class="mb-3 input-box">
                        <label for="lnsp_bmin_4" class="form-label">{{ __('Upload 4th Icon') }}</label>
                        <input class="form-control" type="file" id="lnsp_bmin_4" name="lnsp_bmin_4">
                        <label for="lnsp_bminl_4" class="form-label">{{ __('Upload 4th Icon Link') }}</label>
                        <input class="form-control" type="text" id="lnsp_bminl_4" name="lnsp_bminl_4" value="{{ $webSiteContent['lnsp_bminl_4'] }}">
                    </div>

                    <img src="{{ asset($webSiteContent['lnsp_bmin_5']) }}" alt="Site Icons" class="img-fluid my-2" width="100">
                    <div class="mb-3 input-box">
                        <label for="lnsp_bmin_5" class="form-label">{{ __('Upload 5th Icon') }}</label>
                        <input class="form-control" type="file" id="lnsp_bmin_5" name="lnsp_bmin_5">
                        <label for="lnsp_bminl_5" class="form-label">{{ __('Upload 5th Icon Link') }}</label>
                        <input class="form-control" type="text" id="lnsp_bminl_5" name="lnsp_bminl_5" value="{{ $webSiteContent['lnsp_bminl_5'] }}">
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Upload') }}</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
