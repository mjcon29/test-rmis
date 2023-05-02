@extends('layouts.app', ['activePage' => 'users', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @include('layouts.components.status_nav')
            @include('layouts.components.notification')
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                            <h3 class="text-light">{{ __('User Management') }}</h3>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addUserModal" data-title="Add User">
                                <i class="bi-plus-circle me-2"></i> Add New Users</button>
                        </div>

                        <div class="card-body " id="show_all_users">
                            @include('layouts.components.loader')

                        </div>
                    </div>
                </div>
            </div>

            {{-- Document modal start --}}
            @include('modal.add_user')
            @include('modal.edit_user')
            {{-- Document modal end --}}
        </div>
    </div>
@endsection
@push('footer')
    @include('scripts.user_crud')
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
