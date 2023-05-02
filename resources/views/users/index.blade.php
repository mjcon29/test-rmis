@extends('layouts.app', ['activePage' => __($section), 'titlePage' => __($titlePage)])
@section('content')
    <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
        <h3 class="text-light">{{ __($section) }}</h3>
        
        {{-- @role(['administrator','superadmin']) --}}
        @permission('users-create')
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{__($section)}}AddModal">
            <i class="bi-plus-circle me-2"></i> Add New {{__($section)}}
        </button>
        {{-- @endrole --}}
        @endpermission

    </div>

    <div class="card-body " id="show_all_{{__($section)}}">
        @include('layouts.components.loader')

    </div>

    {{-- Document modal start --}}
    {{-- @include('modal.document.add') --}}
    @include("modal.add_".$section)
    @include("modal.edit_".$section)
    {{-- Document modal end --}}    

    
@endsection

@push('footer')
    @include('scripts.'.$section."_crud")
    {{-- @include('scripts.dropzone')
    <script>fetchAllDocuments();</script> --}}
    
@endpush