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
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Penta Force Ai') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')

<div class="pt-6 page-body">
    <div class="container">
        <div class="card py-2 px-4 mt-2 w-10/12 mx-auto">

            <div class="card-header">
                <h2>{{ __('Add New Penta Force Ai Slider') }}</h2>
            </div>

            <div class="card-body">
                <form action="{{ route('admin.settings.frontend.pentaforceaddpost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 input-box">
                        <label for="image" class="form-label">{{ __('image') }}</label>
                        <input class="form-control" type="file" id="image" name="image" required>
                    </div>
                    <div class="mb-3 input-box">
                        <label for="title" class="form-label">{{ __('Title') }}</label>
                        <input class="form-control" type="text" id="title" name="title" required>
                    </div>
                    <div class="mb-3 input-box">
                        <label for="color" class="form-label">{{ __('Color') }}</label>
                        <input style="height: 50px" type="color" name="color" class="form-control">
                    </div>
                    <div class="mb-3 input-box">
                        <label for="description" class="form-label">{{ __('Description') }}</label>
                        <textarea class="form-control" type="text" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <a style="font-size: 10px;min-width: 80px;border-radius: 35px;" href="{{route('admin.settings.frontend.pentaforceai')}}" type="button" class="btn btn-secondary">{{ __('Cancel') }}</a>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
