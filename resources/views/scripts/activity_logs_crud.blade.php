<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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

    // ----------------------------------------------------------------
    fetchAllRoutes();

    function fetchAllRoutes() {
        $.ajax({
            url: '{{ route('activity_logs.activity_log.all') }}',
            method: 'get',
            success: function(response) {
                $("#show_all_logs").html(response.content);
                var table = $('#logsTable').DataTable({
                    "order": [
                        [0, "desc"]
                    ],
                    // columnDefs: [{
                    //     orderable: false,
                    //     targets: [2]
                    // }]
                });

                table.columns().iterator('column', function(ctx, idx) {
                    $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
                });
            }
        });
    }


</script>
