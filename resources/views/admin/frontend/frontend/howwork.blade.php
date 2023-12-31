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
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('How Does It Work Settings Panel') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection
@section('content')

<div class="row">
    <div class="col-lg-10 m-auto col-12">
        <div class="card overflow-hidden border-0">
            <div class="card-header">
                <h3 class="card-title">How Does It Work Settings Panel</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.frontend.howworkdes') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-md-12 col-sm-12">

                            <div class="mb-3 input-box">
                                <label for="title" class="form-label">{{ __('Title') }}</label>
                                <input class="form-control" type="text" id="title" name="title"
                                    value="{{ $howDoesItWork->title }}">
                            </div>
                            <div class="mb-3 input-box">
                                <label for="description" class="form-label">{{ __('Description') }}</label>
                                <textarea class="form-control" type="text" id="description" name="description" rows="3">{{ $howDoesItWork->description }}</textarea>
                            </div>

                        </div>

                        <div class="border-0 text-right mb-2 mt-1">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </div>
                </form>

                <div class="card-header">
                    <h3 class="card-title">How Does It Work Settings</h3>
                </div>

                <div class="border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="mb-0 me-auto">Service Items</h6>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#howiswork" class="btn btn-primary ms-auto">{{ __('Add New') }}</button>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                @foreach ($howDoesItWork->webContents as $key => $content)
                                    <form action="{{ route('admin.settings.frontend.howworkupdate', ['key' => $key]) }}" method="POST">
                                        @csrf
                                        <div class="flex space-x-3 input-box">
                                            <div class="my-2 flex items-center">
                                                <h3 class="flex items-center">{{ $key+1  }}</h3>
                                            </div>
                                            <div class="w-full my-2">
                                                <textarea class="form-control" type="text" name="content" rows="3">{{ $content }}</textarea>
                                            </div>
                                        </div>
                                        <div class="my-2 w-full mx-auto flex text-center justify-center">
                                            <button type="submit" class="btn btn-primary"> {{ __('Edit') }} </button>
                                            <a href="{{ route('admin.settings.frontend.howworkdelete', ['key' => $key]) }}" style="font-size: 10px;min-width: 80px;border-radius: 35px;" class="btn btn-danger"> {{ __('Delete') }} </a>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


 <!-- futures AI Add New Modal -->
 <div class="modal fade" id="howiswork" tabindex="-1" aria-labelledby="howisworkLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="howisworkLabel">Add a new content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.settings.frontend.howworkadd') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Content') }}</label>
                        <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button style="font-size: 10px;min-width: 80px;border-radius: 35px;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
