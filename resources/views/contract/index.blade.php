@extends('layouts.admin')
@section('page-title')
    {{__('Manage Contracts')}}
@endsection

@section('action-button')
    <div class="row d-flex justify-content-end">
        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
            <div class="all-button-box">
                <a href="{{ route('contract.create') }}" class="btn btn-xs btn-white btn-icon-only width-auto">
                    <i class="fas fa-plus"></i> {{__('Create')}}
                </a>
            </div>
        </div>
    </div>

@endsection

@section('content')
@endsection














{{-- @extends('layouts.admin')
@section('page-title')
    {{__('Manage Contracts')}}
@endsection 


@section('action-button')
        <div class="row d-flex justify-content-end">
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-12">
                <div class="all-button-box">
                    <a href="{{ route('contract.create') }}" class="btn btn-xs btn-white btn-icon-only width-auto">
                        <i class="fas fa-plus"></i> {{__('Create')}}
                    </a>
                </div>
            </div>
        </div>
        <div id="summernote"></div>
        </div>

@endsection

@push('scripts')
    <script>
        $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
        });
    </script>
@endpush --}}
    
