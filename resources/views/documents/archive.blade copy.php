@extends('layouts.app', ['activePage' => $activePage, 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @include('layouts.components.status_nav')
            @include('layouts.components.notification')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">


                        <div class="card-body " id="show_archive_documents">
                            @include('layouts.components.loader')

                        </div>
                    </div>
                </div>
            </div>

            {{-- Document modal start --}}
            {{-- @include('modal.document.add') --}}
            {{-- @include('modal.document.edit') --}}
            {{-- Document modal end --}}
        </div>
    </div>
@endsection
@push('footer')
    @include('scripts.documents_crud')
    <script>fetchAllArchive();</script>
@endpush

@push('js')
    <script>
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
