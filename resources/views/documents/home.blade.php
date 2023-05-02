@extends('layouts.app', ['activePage' => $activePage, 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                            <h3 class="text-light">{{ __($division_name . 'Documents') }}</h3>
                            
                            @permission('documents-create')
                            {{-- <button type="button" class="btn btn-success" id="addDocument" data-toggle="modal" data-target="#addDocumentModal"> --}}
                            <button type="button" class="btn btn-success" id="addDocument" data-toggle="modal" data-target="#addDocumentModal">
                                <i class="bi-plus-circle me-2"></i> Add New Document
                            </button>
                            @endpermission

                        </div>

                        <div class="card-body " id="show_all_documents">
                            @include('layouts.components.loader')

                        </div>
                    </div>
                </div>
            </div>

            {{-- Document modal start --}}
            {{-- @include('modal.document.add') --}}
            @include('modal.document.add')
            @include('modal.document.edit')
            {{-- Document modal end --}}
        </div>
    </div>
@endsection
@push('footer')
    @include('scripts.documents_crud')
    @include('scripts.dropzone')
    <script>fetchAllDocuments();</script>
    
@endpush

@push('js')
    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
            if ($('.alert').length) {
                setInterval(() => {
                    $('.alert').addClass("fadeOutUp");
                }, 3000);

            }
        });
    </script>

    <script src="{{ asset('auto.js') }}"></script>

@endpush
