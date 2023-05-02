<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.pdflink').click(function() {
        $.ajax({
            type: 'GET',
            url: "{{ route('sync-pdf') }}"
        });
    });

    $('.locked').click(function() {

        id = $(this).data("id");

        let str = '{{ route('lock-pdf', ['id' => ':id']) }}';
        let url = str.replace(/:id/g, id);

        $.ajax({
            type: 'GET',
            url: url,
            success: function(response) {},
            error: function(error) {
                console.log(error)
            }
        });

        $(this).toggleClass("decrypted");

        if ($(this).hasClass("decrypted")) {

            $(".lock_text").text("Lock");
            $(".locked i").text("lock_open");
            $(".locked i").addClass("animate__animated animate__infinite animate__swing");
        } else {
            $(".lock_text").text("Unlock");
            $(".locked i").text("lock");
            $(".locked i").removeClass("animate__animated animate__infinite animate__swing");
        }

    });

    $('#RouteAction').on('input', function() {
        let value = $(this).val();

        let action_id = $('#actionlistOptions [value="' + value + '"]').data('value');
        $(this).data('value', action_id)
    });

    $('#RouteActionUpdate').on('input', function() {
        let value = $(this).val();

        let action_id = $('#actionlistOptions [value="' + value + '"]').data('value');
        $(this).data('value', action_id)
    });
    // -------------------------------------------------------------------
    $('#RouteDivision').on('input', function() {
        let value = $(this).val();

        let action_id = $('#employeeDivisionlistOptions [value="' + value + '"]').data('value');
        $(this).data('value', action_id)
    });

    $('#RouteDivisionUpdate').on('input', function() {
        let value = $(this).val();

        let action_id = $('#employeeDivisionlistOptions [value="' + value + '"]').data('value');
        $(this).data('value', action_id)
    });
    // -------------------------------------------------------------------
    $("#addRoute").click(function(e) {

        $("#addRoute").prop('disabled', true);
        formData = $('#add_route_form').serialize();


        e.preventDefault();
        // var division_id = $("input[name=division_id]").val();
        var document_id = $("input[name=document_id]").val();
        var user = $('#RouteUser').val();
        var action = $('#RouteAction').val();
        var remarks = $("textarea[name=remarks]").val();

        if (typeof(action) == "undefined") {
            action = 21;
        }


        $.ajax({
            type: 'POST',
            url: "{{ route('docroutes.create') }}",
            data: {

                document_id: document_id,
                route_user: user,
                action: action,
                remarks: remarks,

                // division_id: division_id,
            },
            success: function(response) {
                $("#addRouteModal").toggle();
                Swal.fire(
                    'Updated!',
                    'Document Route Updated Successfully!',
                    'success'
                ).then(function() {
                    fetchAllRoutes();
                    // $("#addRouteModal").modal('hide');
                    $("button#addRoute").text('Update Document');
                    $("#add_route_form")[0].reset();
                    window.location.href = "{{ URL::to(\Request::getRequestUri()) }}";
                });


            },
            error: function(error) {
                console.log(error)
            }
        });
    });

    $(document).ajaxStop(function() {

        $('.editIcon').hover(mouseEnter, mouseLeave);
        $('table .deleteIcon').hover(mouseEnterDelete, mouseLeaveDelete);
        $('table .btn-info').hover(mouseEnter, mouseLeave);



        function mouseEnter() {
            $(this).addClass('animate__animated animate__pulse');
        };

        function mouseLeave() {
            $(this).removeClass('animate__animated animate__pulse');
        };

        function mouseEnterDelete() {
            $(this).addClass('animate__animated animate__swing');
        };

        function mouseLeaveDelete() {
            $(this).removeClass('animate__animated animate__swing');
        };



    });




    // -------------------------------------------------------
    $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();

        let id = $(this).attr('id');

        $.ajax({
            url: "{{ route('edit.doc_route') }}",
            method: 'get',
            data: {
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {

                dr = response[0].date_received;

                $('#RouteUser.selectpicker').selectpicker('val', response.recepients);
                $('#RouteAction.selectpicker').selectpicker('val', response.actions);

                $('#edit_route_form #RouteRemarksEdit').val(response[0].remarks);
                $('#date_received_update').val(response[0].date_received);
                $('#route_id').val(id);


                for (let x in response[0]) {

                    var el = document.querySelector('#editRoute');
                    el.setAttribute('data-id', id);

                    if (x.search("_id") < 0) {
                        $("#editRouteModal #" + x).val(response[0][x]);
                    } else {
                        name = x.replace('_id', '');
                        if (!name.match('action')) {
                            if (!name.match('employee')) {
                                $("#editRouteModal input[name='" + x + "'").val(response[0][x]);
                                $("#editRouteModal #" + x).val(response[name]);
                            } else {
                                $("#RouteDivisionUpdate").val(response.division);
                            }


                        } else {
                            $("#RouteActionUpdate").val(response.action);
                        }


                    }
                }


            }
        });
    });

    $("button#editRoute").click(function(e) {
        e.preventDefault();

        var date_received = $("#editRouteModal input[name=date_received]").val();
        // var action = $("#editRouteModal textarea[name=action]").val();
        // var division_id = $("#editRouteModal input[name=division_id]").val();

        // var employee_id = $('#RouteDivisionUpdate').data('value');
        // var action = $('#RouteActionUpdate').data('value');
        // var remarks = $('#RouteRemarksEdit').val();
        // var document_id = $("input[name=document_id]").val();
        // var el = document.querySelector("button#editRoute");
        // var id = el.getAttribute('data-id');
        // ---------------------------------------------------------------------------


        formData = $('#edit_route_form').serialize();


        e.preventDefault();
        var route_id = $("#edit_route_form input[name=route_id]").val();
        var document_id = $("#edit_route_form input[name=document_id]").val();
        var user = $('#edit_route_form #RouteUser').val();
        var action = $('#edit_route_form #RouteAction').val();
        var remarks = $("#edit_route_form textarea[name=remarks]").val();

        $(this).text('Updating...');

        $.ajax({
            type: 'POST',
            url: '{{ route('update.doc_route') }}',
            data:{
                    document_id: document_id,
                    route_id: route_id,
                    route_user: user,
                    action: action,
                    remarks: remarks,
                },
            method: 'put',
            success: function(data) {

                $("#editRouteModal").toggle();
                $("#add_route_form")[0].reset();
                Swal.fire(
                    'Updated!',
                    'Document Route Updated Successfully! ',
                    'success'
                ).then(function() {
                    // fetchAllRoutes();

                    window.location.href = "{{ URL::to(\Request::getRequestUri()) }}";

                });


            }
        });
    });

    // ---------------------- delete --------------------------------------------- 
    // delete doc ajax request
    $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id').replace('del_', '');
        let csrf = '{{ csrf_token() }}';
        delRoute = $(this).data("deltarget");

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
                    url: delRoute,
                    method: 'delete',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {

                        if (response.pdf) {

                            const element = document.querySelector('#' + response.pdf);
                            element.classList.add('animate__animated',
                                'animate__hinge');

                            element.addEventListener('animationend', () => {
                                element.parentNode.removeChild(element);
                            });

                        }

                        Swal.fire(
                            'Deleted!',
                            'Deleted.',
                            'success'
                        )
                        fetchAllRoutes();
                    }
                });
            }
        })
    });

    // archive doc ajax request
    $(document).on('click', '.completeIcon', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let csrf = '{{ csrf_token() }}';

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Archived it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('markCompleted.doc') }}',
                    method: 'put',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        Swal.fire(
                            'Archived!',
                            'Document Has been Archived.',
                            'success'
                        ).then(function() {
                            window.location.href = "{{ route('archiveList',$filter) }}";
                        });
                        // fetchAllDocuments();
                    }
                });


            }
        })
    });
    $(document).on('click', '.archiveIcon', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let csrf = '{{ csrf_token() }}';

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Archived it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('archive.doc') }}',
                    method: 'put',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        Swal.fire(
                            'Archived!',
                            'Document Has been Archived.',
                            'success'
                        ).then(function() {
                            window.location.href = "{{ route('archiveList',$filter) }}";
                        });
                        // fetchAllDocuments();
                    }
                });


            }
        })
    });

    $(document).on('click', '.signedIcon', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let csrf = '{{ csrf_token() }}';



        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Marked as signed!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('sign.doc') }}',
                    method: 'put',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        Swal.fire(
                            'Signed!',
                            'Document Has been Signed.',
                            'success'
                        ).then(function() {
                            window.location.href = "{{ route('home') }}";
                        });
                        // fetchAllDocuments();
                    }
                });


            }
        })
    });
    $(document).on('click', '.releaseIcon', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let csrf = '{{ csrf_token() }}';



        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Forward to Releasing'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('releasing.doc') }}',
                    method: 'put',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        Swal.fire(
                            'Updated!',
                            'Document Has been forwarded to Releasing.',
                            'success'
                        ).then(function() {
                            window.location.href = "{{ route('home') }}";
                        });
                        // fetchAllDocuments();
                    }
                });


            }
        })
    });

    $(document).on('click', '.returnIcon', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let csrf = '{{ csrf_token() }}';



        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Return it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '{{ route('return.doc') }}',
                    method: 'put',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        Swal.fire(
                            'Returned!',
                            'Document Has been Returned.',
                            'success'
                        ).then(function() {
                            window.location.href = "{{ route('home') }}";
                        });
                        // fetchAllDocuments();
                    }
                });


            }
        })
    });

    // ----------------------------------------------------------------
    fetchAllRoutes();

    function fetchAllRoutes() {
        $.ajax({
            url: '{{ route('fetchAllRoute', $document->id) }}',
            method: 'get',
            success: function(response) {
                $("#show_all_documents").html(response);
                var table = $('#myTable').DataTable({
                    "order": [
                        [0, "desc"]
                    ],
                    columnDefs: [{
                            "targets": [0],
                            "visible": false,
                            "searchable": false
                        },
                        {
                            orderable: false,
                            targets: [2]
                        }
                    ]
                });

                table.columns().iterator('column', function(ctx, idx) {
                    $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
                });
            }
        });
    }

    fetchActions();

    function fetchActions() {
        $.ajax({
            url: "{{ route('fetcActions') }}",
            method: 'get',
            success: function(response) {

                $.each(response.actions, function(index, value) {
                    $('#actionlistOptions').append("<option data-value='" + value.action.id +
                        "' value='" +
                        value.action.name + "' />");
                });

            }
        });
    }

    $(document).on('click', '.memoNumberIcon', function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let csrf = '{{ csrf_token() }}';

        alert(id);

                $.ajax({
                    url: '{{ route('generate_memo_number') }}',
                    method: 'put',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        Swal.fire(
                            'Archived!',
                            'Document Has been Archived.',
                            'success'
                        ).then(function() {
                            window.location.href = "{{ route('archiveList',$filter) }}";
                        });
                        // fetchAllDocuments();
                    }
                });

        
    });
</script>
