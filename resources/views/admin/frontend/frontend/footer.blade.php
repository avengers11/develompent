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
        <div class="w-8/12 px-4 py-2 mx-auto mt-2 card">

            <div class="card-header">
                <h3 class="card-title">{{ __('Footer Nav Menu Settings') }}</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.frontend.footernavmenu') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 input-box">
                        <label for="footer_title" class="form-label">{{ __('Title') }}</label>
                        <input class="form-control" type="text" id="footer_title" name="footer_title" required
                            value="{{ $webSiteContent->footer_title }}">
                    </div>
                    <div class="mb-3 input-box">
                        <label for="nav_footer_title" class="form-label">{{ __('Nav Title') }}</label>
                        <input class="form-control" type="text" id="nav_footer_title" name="nav_footer_title" required
                            value="{{ $webSiteContent->nav_footer_title }}">
                    </div>
                    <div class="mb-3 input-box">
                        <label for="footer_app_store_url" class="form-label">{{ __('App Store Url') }}</label>
                        <input class="form-control" type="text" id="footer_app_store_url" name="footer_app_store_url"
                            required value="{{ $webSiteContent->footer_app_store_url }}">
                    </div>
                    <div class="mb-3 input-box">
                        <label for="footer_google_play_url" class="form-label">{{ __('Google Play Store Url') }}</label>
                        <input class="form-control" type="text" id="footer_google_play_url" name="footer_google_play_url"
                            required value="{{ $webSiteContent->footer_google_play_url }}">
                    </div>
                    <div class="mb-3 input-box">
                        <label for="footer_description_left" class="form-label">{{ __('Description Left') }}</label>
                        <textarea class="form-control" type="text" id="footer_description_left" name="footer_description_left" required
                            rows="3">{{ $webSiteContent->footer_description_left }}</textarea>
                    </div>
                    <div class="mb-3 input-box">
                        <label for="footer_description_right" class="form-label">{{ __('Description Right') }}</label>
                        <textarea class="form-control" type="text" id="footer_description_right" name="footer_description_right" required
                            rows="3">{{ $webSiteContent->footer_description_right }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </form>
                <hr />
                <h3 class="mt-3">Footer Menu Items</h3>
                <form action="{{ route('admin.settings.frontend.footermenu') }}" method="POST">
                    @csrf
                    <label for="menu" class="form-label">{{ __('Menu Item') }}</label>
                    @foreach ($webFooterMenus as $key => $menu)
                        <div class="flex items-center py-1 my-2 cursor-pointer w-full gap-x-2 input-box">
                            <input type="text" class="w-full form-control" name="menuNames[]" required
                                value="{{ $menu->name }}">
                            <input type="text" class="w-full form-control" name="menuUrls[]" required
                                value="{{ $menu->url }}">
                            <input type="text" class="hidden w-full form-control" name="menuIds[]"
                                value="{{ $menu->id }}">
                        </div>
                    @endforeach
                    <button type="submit" class="mt-2 btn btn-primary">{{ __('Update') }}</button>
                </form>
                <hr />
                <h3 class="mt-3">Footer Menu Icon Items</h3>
                <form action="{{ route('admin.settings.frontend.footermenuicons') }}" method="POST">
                    @csrf
                    <label for="menu" class="form-label">{{ __('Menu\'s Icon Item') }}</label>
                    @foreach ($webFooterIconMenus as $menu)
                        <div class="flex items-center py-1 my-2 space-x-3 border border-gray-500 cursor-pointer">
                            <div class="ml-2">
                                <h4 class="flex items-center mx-2 mt-1 uppercase">{{ $menu->name }}</h4>
                            </div>
                            <div class="w-full mx-2 input-box">
                                <input type="text" class="form-control" name="menuUrls[]" required
                                    value="{{ $menu->url }}">
                                <input type="text" class="hidden w-full form-control" name="menuIds[]"
                                    value="{{ $menu->id }}">
                            </div>
                        </div>
                    @endforeach
                    <button type="submit" class="mt-2 btn btn-primary">{{ __('Update') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
