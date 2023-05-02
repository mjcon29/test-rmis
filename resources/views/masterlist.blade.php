@extends('layouts.app', ['activePage' => 'masterlist', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            @include('layouts.components.notification')

            <div class="row my-3">
                <div class="col-lg-3">
                    <div class="card shadow">
                        <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                            <h6 class="text-light">{{ __('DocTypes') }}</h6>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs" id="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active btn-add" data-toggle="modal"
                                                data-target="#addMasterModal" data-title="{{ __('Add Document Types') }}"
                                                data-route="{{ route('doctypes.store') }}" data-dbname="doctypes">
                                                <i class="bi-plus-circle me-2"></i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-body " id="show_all_doctypes">
                            @include('layouts.components.loader')
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow">
                        <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                            <h6 class="text-light">{{ __('Origin Offices') }}</h6>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs" id="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active btn-add" data-toggle="modal"
                                                data-target="#addMasterModal" data-title="{{ __('Add Origin Office') }}"
                                                data-route="{{ route('origin-offices.store') }}"
                                                data-dbname="origin_offices">
                                                <i class="bi-plus-circle me-2"></i>
                                                {{-- <div class="ripple-container"></div> --}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-body " id="show_all_origin_offices">
                            @include('layouts.components.loader')
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow">
                        <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                            <h6 class="text-light">{{ __('Offices') }}</h6>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs" id="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active btn-add" data-toggle="modal"
                                                data-target="#addMasterModal" data-title="{{ __('Add Office') }}"
                                                data-route="{{ route('offices.store') }}"
                                                data-dbname="offices">
                                                <i class="bi-plus-circle me-2"></i>
                                                {{-- <div class="ripple-container"></div> --}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-body " id="show_all_offices">
                            @include('layouts.components.loader')
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card shadow">
                        <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                            <h6 class="text-light">{{ __('Divisions') }}</h6>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs" id="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active btn-add" data-toggle="modal"
                                                data-target="#addMasterModal" data-title="{{ __('Add Division') }}"
                                                data-route="{{ route('divisions.store') }}" data-dbname="divisions">
                                                <i class="bi-plus-circle me-2"></i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-body " id="show_all_divisions">
                            @include('layouts.components.loader')
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card shadow">
                        <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                            <h6 class="text-light">{{ __('Means of Receiving') }}</h6>
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs" id="tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active btn-add" data-toggle="modal"
                                                data-target="#addMasterModal"
                                                data-title="{{ __('Add Means of Receiving') }}"
                                                data-route="{{ route('mor.store') }}" data-dbname="mor">
                                                <i class="bi-plus-circle me-2"></i>
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card-body " id="show_all_mor">
                            @include('layouts.components.loader')
                        </div>
                    </div>
                </div>
            </div>

            {{-- Document modal start --}}
            @include('modal.add_origin_office')
            @include('modal.edit_origin_office')
            @include('modal.add_employee')
            @include('modal.edit_employee')
            {{-- Document modal end --}}
        </div>
    </div>
@endsection
@push('footer')
    {{-- @include('scripts.documents_crud') --}}
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

            $('#tabs li a:not(:first)').addClass('inactive');
            $('.container').hide();
            $('.container:first').show();

            $('#tabs li a').click(function() {
                var t = $(this).attr('id');
                if ($(this).hasClass('inactive')) { //this is the start of our condition 
                    $('#tabs li a').addClass('inactive');
                    $(this).removeClass('inactive');

                    $('.container').hide();
                    $('#' + t + 'C').fadeIn('slow');
                }
            });

            fetchAllNameList('origin_offices')
            fetchAllNameList('offices')
            fetchAllNameList('divisions')
            fetchAllNameList('doctypes')
            fetchAllNameList('mor')
            fetchAllEmployee();

            function fetchAllNameList(target_db) {
                let text = "{{ route('fetchAll.divisions') }}";
                let db = text.replace("divisions", target_db);
                

                $.ajax({
                    url: db,
                    method: 'get',
                    success: function(response) {
                        $("#show_all_" + target_db).html(response);
                        var table = $('#all_' + target_db).DataTable({
                            pagingType: 'numbers',
                            order: [
                                [1, 'desc']
                            ],
                            "bLengthChange": false,
                            "pageLength": 5,
                            searching: true,
                            "fnDrawCallback": function(oSettings) {
                                $(oSettings.nTHead).hide();
                            },
                            "columnDefs": [{
                                "visible": false,
                                "targets": 1
                            }]
                        });
                    }
                });
            }


            function fetchAllEmployee() {
                $.ajax({
                    url: "{{ route('fetchAll.employees') }}",
                    method: 'get',
                    success: function(response) {
                        $("#show_all_employees").html(response);
                        var table = $('#allEmployees').DataTable({
                            order: [
                                [4, 'desc']
                            ],
                            "bLengthChange": false,
                            "pageLength": 5,
                            searching: false,

                        });
                    }
                });
            }

            $(document).on('click', '.editIcon.editMaster', function(e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $('.modal-title').html($(this).data("title"));
                $('#editMasterForm').attr('action', $(this).data("route"));
                $('#editMasterForm').attr('name', $(this).data("dbname"));


                $.ajax({
                    url: $(this).data("db"),
                    method: 'get',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {

                        for (let x in response[0]) {
                            
                            $("#editMasterModal input[name='" + x + "'").val(response[0][x]);
                        }
                    }
                });
            });


            function fetchSelectList(division_id) {
                $.ajax({
                    url: "{{ route('list.divisions') }}",
                    method: 'get',
                    success: function(response) {

                        $.each(response.list, function(index, value) {
                            $('#edit_division_list').append($('<option/>', {
                                value: value.id,
                                text: value.name
                            }));
                        });

                        $("#edit_division_list").val(division_id);
                        $("#edit_division_list").val(division_id).change();
                    }
                });
            }



            $(document).on('click', '.editIcon.editEmployee', function(e) {
                e.preventDefault();


                let id = $(this).attr('id');

                // $('#editUser #id').val(id);

                $('.modal-title').html($(this).data("title"));
                $('#editEmployeeForm').attr('action', $(this).data("route"));
                $('#editEmployeeForm').attr('name', $(this).data("dbname"));
                $('#edit_division_list')
                    .find('option')
                    .remove()
                    .end();

                url = $(this).data("db");

                $.ajax({
                    url: url,
                    method: 'get',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {

                        $('#id').val(id);
                        const columns = ["name", 
                                         "designation",
                                         "division_id",
                                         "email",
                                        ];
                        division_id = response[0].division.name;

                        for (let row_name in response[0]) {
                            if (columns.includes(row_name)) {
                                $("#editEmployeeModal input[name='" + row_name + "'").val(
                                    response[0][row_name]);
                            }

                        }

                        fetchSelectList(division_id);

                    }
                });
            });

            // delete employee ajax request
            $(document).on('click', '.deleteEmp', function(e) {
                e.preventDefault();
                let id = $(this).attr('id').replace('del_', '');
                let csrf = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('delete.employee') }}",
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Employee Has been deleted.',
                                    'success'
                                )
                                fetchAllEmployee();
                            }
                        });
                    }
                })
            });

            $(document).on('click', '.deleteDocType', function(e) {

                e.preventDefault();
                let id = $(this).attr('id').replace('del_', '');
                let csrf = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('delete.doctype') }}",
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'DocType Has been deleted.',
                                    'success'
                                )
                                fetchAllNameList('doctypes');
                            }
                        });
                    }
                })
            });

            $(document).on('click', '.deleteOriginOffice', function(e) {

                e.preventDefault();
                let id = $(this).attr('id').replace('del_', '');
                let csrf = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('delete.origin_office') }}",
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'DocType Has been deleted.',
                                    'success'
                                )
                                fetchAllNameList('origin_offices');
                            }
                        });
                    }
                })
            });

            $(document).on('click', '.deleteOffice', function(e) {

                e.preventDefault();
                let id = $(this).attr('id').replace('del_', '');
                let csrf = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('delete.office') }}",
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Office Has been deleted.',
                                    'success'
                                )
                                fetchAllNameList('offices');
                            }
                        });
                    }
                })
            });

            $(document).on('click', '.deleteMOR', function(e) {

                e.preventDefault();
                let id = $(this).attr('id').replace('del_', '');
                let csrf = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('delete.mor') }}",
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Data Has been deleted.',
                                    'success'
                                )
                                fetchAllNameList('mor');
                            }
                        });
                    }
                })
            });

            $(document).on('click', '.deleteDivision', function(e) {

                e.preventDefault();
                let id = $(this).attr('id').replace('del_', '');
                let csrf = '{{ csrf_token() }}';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('delete.division') }}",
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Division Has been deleted.',
                                    'success'
                                )
                                fetchAllNameList('divisions');
                            }
                        });
                    }
                })
            });
            // ---------------------------- Add form -------------------------------------------
            var myFuncs = {
                Origins: function() {
                    fetchAllOrigins();
                },
                Divisions: function() {
                    fetchAllDivisions();
                },
                DocType: function() {
                    fetchAllDocType();
                },
                MOR: function() {
                    fetchAllMOR();
                },
                Employee: function() {
                    fetchAllEmployee();
                }
            };

            $("form.form-masterlist").submit(function(event) {
                //Make sure that the form isn't actully being sent.
                event.preventDefault();
                URL = $("form.form-masterlist").attr('action');
                formData = $('form.form-masterlist').serialize();
                tbl_name = $("form.form-masterlist").attr('name');

                $('.btn-save').text('Adding...');

                $.ajax({
                    type: 'POST',
                    url: URL,
                    data: formData,
                    success: function(result) {

                        if (result.status == 200) {
                            Swal.fire(
                                'Added!',
                                result.msg,
                                'success'
                            )
                            fetchAllNameList(tbl_name);
                        }
                        $("button.btn-save").text('Added');
                        $("form.form-masterlist")[0].reset();
                        $("#addMasterModal").modal('hide');
                    }
                });


            });
            // --------------------- save new employee ---------------------------------------            
            $("form#addEmployeeForm").submit(function(event) {
                //Make sure that the form isn't actully being sent.
                event.preventDefault();
                URL = $("form#addEmployeeForm").attr('action');
                formData = $('form#addEmployeeForm').serialize();
                tbl_name = $("form#addEmployeeForm").attr('name');

                $('.btn-save').text('Adding...');

                $.ajax({
                    type: 'POST',
                    url: URL,
                    data: formData,
                    success: function(result) {

                        if (result.status == 200) {
                            Swal.fire(
                                'Added!',
                                result.msg,
                                'success'
                            )
                            // fetchAllOrigins();
                            myFuncs[tbl_name]();
                        }
                        $("button.btn-save").text('Added');
                        $("form#addEmployeeForm")[0].reset();
                        $("#addEmployeeModal").modal('hide');
                    }
                });


            });
            // ------------------------- update masterlist ---------------------------------------
            $("form#editMasterForm").submit(function(event) {
                //Make sure that the form isn't actully being sent.
                event.preventDefault();
                URL = $("form#editMasterForm").attr('action');
                formData = $('form#editMasterForm').serialize();
                // $("button[type='submit']").text('Updating...');


                $.ajax({
                    type: 'POST',
                    url: URL,
                    data: formData,
                    success: function(result) {
                        $("#editMasterModal").toggle();
                        Swal.fire(
                            'Updated!',
                            result.msg,
                            'success'
                        ).then(function(){
                            fetchAllNameList($("form#editMasterForm").attr('name'));
                            $("button[type='submit']").text('Update');
                            $("form#editMasterForm")[0].reset();
                            // $("#editMasterModal").modal('hide');
                            window.location.href = "{{ URL::to(\Request::getRequestUri()) }}";
                        });


                    }
                });
            });
            // ------------------------- update Employee/Focal masterlist ---------------------------------------

            $("form#editEmployeeForm").submit(function(event) {
                //Make sure that the form isn't actully being sent.
                event.preventDefault();
                URL = $("form#editEmployeeForm").attr('action');
                formData = $('form#editEmployeeForm').serialize();
                $("button[type='submit']").text('Updating...');

                $.ajax({
                    type: 'POST',
                    url: URL,
                    data: formData,
                    success: function(result) {
                        $("#editEmployeeModal .close").click()
                        
                        Swal.fire(
                            'Updated!',
                            result.msg,
                            'success'
                        ).then(function() {

                            myFuncs[$("form#editEmployeeForm").attr('name')]();
                            $("button[type='submit']").text('Update');
                            
                        });

                    }
                });
            });
        });
    </script>

    <script src="{{ asset('auto.js') }}"></script>
@endpush
