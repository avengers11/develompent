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
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Future Ai') }}</a></li>
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
                <h3 class="card-title">Future Ai Settings Panel
                </h3>
            </div>
            <div class="card-body">

                <div class="border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="mb-0 me-auto">Futures of Ai Settings</h6>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#futuresAIModal" class="btn btn-primary mt-3 ms-auto">
                                {{ __('Add New') }} <i class="fa fa-plus mx-1"></i>
                            </button>
                        </div>

                        <div class="row">
                            <div class="card my-3">
                                <div id="table-default" class="card-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Items') }}</th>
                                                <th>{{ __('Name') }}</th>
                                                <th>{{ __('Color') }}</th>
                                                <th>{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle table-tbody text-heading">
                                            @foreach ($futureAICategories as $key => $item)
                                                <tr>
                                                    <td class="sort-name">{{ $loop->index + 1 }}</td>
                                                    <td class="sort-name">{{ $item->name }}</td>
                                                    <td class="sort-color">
                                                        <div class="px-3 w-fit py-2" style="background-color: {{ $item->color }}">
                                                            {{ $item->color }}</div>
                                                    </td>
                                                    <td class="sort-actions" id="{{ $key }}">
                                                        {{-- <button id="futureaiclredit" type="button" class="btn btn-primary my-1 editFuturesAIModalBtn" data-bs-toggle="modal" data-bs-target="#futuresAIModalUpdate">
                                                            {{ __('Edit') }}
                                                        </button> --}}
                                                        <a href="{{ route('admin.settings.frontend.futureaiclrdelete', ['id' => $key]) }}" style="font-size: 10px;min-width: 80px;border-radius: 35px;" class="btn btn-danger"> {{ __('Delete') }} </a>
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


                <div class="border-0">
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="mb-0 me-auto">Futures of Ai Sliders Settings</h6>
                            <a href="{{ route('admin.settings.frontend.futureaisladd') }}"class="btn btn-primary ms-auto">{{ __('Add New') }}</a>
                        </div>

                        <div class="row">
                            <div class="card my-3">
                                <div id="table-default" class="card-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>{{ __('Image') }}</th>
                                                <th>{{ __('Title') }}</th>
                                                <th>{{ __('Slug') }}</th>
                                                <th>{{ __('Color') }}</th>
                                                <th>{{ __('Description') }}</th>
                                                <th>{{ __('Actions') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle table-tbody text-heading">
                                            @foreach ($futureAiContents as $item)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset($item->image) }}" alt="Site Logo" class="img-fluid"
                                                            height="75" width="100">
                                                    </td>
                                                    <td class="sort-name">{{ $item->title }}</td>
                                                    <td class="sort-slug">{{ $item->slug }}</td>
                                                    <td class="sort-color">
                                                        <div class="p-1" style="background-color: {{ $item->color }}">
                                                            {{ $item->color }}</div>
                                                    </td>
                                                    <td class="sort-description">{{ $item->description }}</td>
                                                    <td class="sort-actions">
                                                        <a href="{{ route('admin.settings.frontend.futureaislupdate', ['id' => $item->id]) }}" class="btn btn-primary"> {{ __('Edit') }} </a>
                                                        <a href="{{ route('admin.settings.frontend.futureaisldelete', ['id' => $item->id]) }}" style="font-size: 10px;min-width: 80px;border-radius: 35px;" class="btn btn-danger"> {{ __('Delete') }} </a>
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



 <!-- futures AI Add New Modal -->
 <div class="modal fade" id="futuresAIModal" tabindex="-1" aria-labelledby="futuresAIModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="futuresAIModalLabel">Add New Futures of Ai</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.settings.frontend.futureaiclraddPost') }}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input class="form-control" type="text" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">{{ __('Color') }}</label>
                        <input type="color" class="w-full" id="color" name="color" required>
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

<div class="modal fade" id="futuresAIModalUpdate" tabindex="-1" aria-labelledby="futuresAIModalUpdateLabel" aria-hidden="true">
   <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="futuresAIModalUpdateLabel">Update Futures of Ai</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <form action="" method="POST">
               <div class="modal-body">
                   @csrf
                   @method('PUT')
                   <input type="hidden" name="key" id="id_update">
                   <div class="mb-3">
                       <label for="name_update" class="form-label">{{ __('Name') }}</label>
                       <input class="form-control" type="text" id="name_update" name="name" required>
                   </div>
                   <div class="mb-3">
                       <label for="color_update" class="form-label">{{ __('Color') }}</label>
                       <input type="color" class="w-full" id="color_update" name="color" required>
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
@section('script')
<script>
    $("#futureaiclredit").click(function(){
        alert();
    });
</script>
@endsection
