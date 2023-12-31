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
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Serivces') }}</a></li>
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
                <h3 class="card-title">Serivces Settings</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.frontend.servicestitle') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-md-12 col-sm-12">

                            <div class="input-box">
                                <h6>{{ __('Title') }}</h6>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="service_title" name="service_title" value="{{ $service->service_title }}">
                                </div>
                            </div>

                            <div class="input-box">
                                <h6>{{ __('Description') }}</h6>
                                <div class="form-group">
                                    <textarea class="form-control" type="text" id="service_description" name="service_description" rows="3">{{ $service->service_description }}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="border-0 text-right mb-2 mt-1">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </div>
                </form>

                <div class="card-header">
                    <h3 class="card-title">Header Bottom Icons</h3>
                </div>

                <div class="border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="mb-0 me-auto">Service Items</h6>
                            <a href="{{ route('admin.settings.frontend.servicesadd') }}"class="btn btn-primary ms-auto">{{ __('Add New') }}</a>
                        </div>

                        <div class="row">
                            <div class="card my-3">
                                <div id="table-default" class="card-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Icon') }}</th>
                                                <th>{{ __('Title') }}</th>
                                                <th>{{ __('Description') }}</th>
                                                <th>{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle table-tbody text-heading">
                                            @foreach ($serviceContents as $item)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset($item->icon) }}" alt="Site Logo" class="img-fluid"
                                                            height="75" width="100">
                                                    </td>
                                                    <td class="sort-name">{{ $item->title }}</td>
                                                    <td class="sort-description">{{ $item->description }}</td>
                                                    <td class="sort-actions">
                                                        <a href="{{ route('admin.settings.frontend.servicesupdate', ['id'=>$item->id]) }}" class="btn btn-primary"> {{ __('Edit') }} </a>
                                                        <a href="{{ route('admin.settings.frontend.servicesdelete', ['id'=>$item->id]) }}" style="font-size: 10px;min-width: 80px;border-radius: 35px;" class="btn btn-danger"> {{ __('Delete') }} </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
