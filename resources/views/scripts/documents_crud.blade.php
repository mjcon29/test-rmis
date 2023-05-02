<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });
    Dropzone.autoDiscover = false;
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

    $('#addDocumentModal').on('shown.bs.modal', function(e) {

        dropzone_box("#addDocument");
    });

    $('#addDocumentModal').on('hide.bs.modal', function() {
        window.location.href = "{{ URL::to('/') }}";
    });


    $('#editDocumentModal').on('shown.bs.modal', function(e) {
        // dropzone($(this).attr('id'));
    });

    // $("#createDoc").click(function(e) {
    //     $(this).prop('disabled', true);
    // });

   

    // edit employee ajax request

    function dropzone_box(btn) {


        if (Dropzone.instances.length > 0) Dropzone.instances.forEach(dz => dz.destroy());
        let token = $('meta[name="csrf-token"]').attr('content');
        let modal_id = $(btn).data('target');


        let id = $(btn).attr('id');

        

        if (typeof id !== 'undefined' && id !== false) {


            switch (modal_id) {
                case "#attachDocumentModal":
                    dz_url = "{{ route('document.update_file') }}";
                    break;
                default:
                    dz_url = "{{ route('document.update_file') }}";
            }
        } else {
            dz_url = "{{ route('document.store_file') }}";
        }

        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone(modal_id + " div.dropzoneDragArea", {
            paramName: "file",
            url: dz_url,
            previewsContainer: modal_id + ' div.dropzone-previews',
            addRemoveLinks: true,
            autoProcessQueue: false,
            uploadMultiple: false,
            parallelUploads: 10,
            maxFiles: 10,
            params: {
                _token: token
            },
            // The setting up of the dropzone
            init: function() {

                var myDropzone = this;

                //form submission code goes here
                $(modal_id + " form").submit(function(event) {
                    // $("#updateDocument").click(function(event) {
                    //Make sure that the form isn't actully being sent.
                    

                    
                    event.preventDefault();

                    $(modal_id).toggle();

                    URL = $(modal_id + " form").attr('action');
                    $("input[name=control_number]").val("")

                    formData = $(modal_id + " form").serialize();
                    console.log('before submit form');

                    $("button[type='submit']").text('Updating...');
                    
                    $.ajax({
                        type: 'POST',
                        url: URL,
                        data: formData,
                        success: function(result) {
                            
                            if (result.status == "success") {
                                // fetch the useid
                                var document_id = result.document_id;
                                $("#document_id").val(
                                    document_id
                                ); // inseting document_id into hidden input field
                                //process the queue

                                if (myDropzone.getQueuedFiles().length === 0) {
                                    Swal.fire(
                                        'Added!',
                                        'PDF Added Successfully!',
                                        'success'
                                    ).then(function() {
                                        window.location.href =
                                            "{{ URL::to('/') }}";
                                    });
                                } else {
                                    myDropzone.processQueue();
                                }

                            } else {
                                console.log("error");
                            }
                        }
                    });
                });

                //Gets triggered when we submit the image.
                this.on('sending', function(file, xhr, formData) {

                    //fetch the student id from hidden input field and send that studentid with our image
                    let document_id = document.getElementById('document_id').value;
                    formData.append('document_id', document_id);
                });
                this.on("success", function(file, response) {

                    Swal.fire(
                        'Added!',
                        'PDF Added Successfully!',
                        'success'
                    ).then(function() {
                        window.location.href = "{{ URL::to('/') }}";
                    });

                });
                this.on("queuecomplete", function() {
                    this.removeAllFiles(true);
                    $("button[type='submit']").text('Add Document');
                    $(modal_id).modal('hide');
                });
            }
        });
    }


    $(document).on('click', '.editIcon.editDoc', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');

       
        dropzone_box(this);

       
        
        $.ajax({
            url: "{{ route('documents.document.edit') }}",
            method: 'get',
            data: {
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                

                dr = response[0].date_received;
                $("#editDocumentModal input[name='id'").val(id);
                for (let x in response[0]) {

                    var el = document.querySelector('#updateDocument');
                    el.setAttribute('data-id', id);


                    console.log(response[0][x]);

                    if (x.search("_id") < 0) $("#editDocumentModal #" + x).val(response[0][x]);
                    else {
                        name = x.replace('_id', '');

                        $("#editDocumentModal input[name='" + x + "'").val(response[0][x]);
                        $("#editDocumentModal #" + x).val(response[name]);
                    }
                }
            }
        });
    });



    // delete doc ajax request
    $(document).on('click', '.deleteIcon', function(e) {

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
                    url: "{{ route('delete.doc') }}",
                    method: 'delete',
                    data: {
                        id: id,
                        _token: csrf
                    },
                    success: function(response) {
                        // console.log(response);
                        Swal.fire(
                            'Deleted!',
                            'Document Has been deleted.',
                            'success'
                        )
                        fetchAllDocuments();
                    }
                });
            }
        })
    });

    // fetch all employees ajax request
    // fetchAllDocuments();

    function fetchAllDocuments() {

        $.ajax({
            url: "{{ route('fetchAll.doc', $division) }}",
            method: 'get',
            success: function(response) {

                $(".overdue-pill").text(response.overdue);
                $(".duetoday-pill").text(response.duetoday);

                $("#show_all_documents").html(response.content);


                
                // $('#show_all_documents #documentTable thead tr')
                //     .clone(true)
                //     .addClass('filters')
                //     .appendTo('#show_all_documents #documentTable thead');

                // $(".filters").find("th:last").remove();    

                var table = $('#show_all_documents #documentTable').DataTable({
                    // responsive: true,
                    orderCellsTop: true,
                    fixedHeader: true,


                    // initComplete: function() {
                    //     var api = this.api();

                    //     // For each column
                    //     api
                    //         .columns('.canFilter')
                    //         .eq(0)
                    //         .each(function(colIdx) {
                                
                    //             // Set the header cell to contain the input element
                    //             var cell = $('.filters th').eq(
                    //                 $(api.column(colIdx).header()).index()
                    //             );
                    //             var title = $(cell).text();


                    //             $(cell).html('<input type="text" placeholder="' + title +
                    //                 '" />');

                    //             // On every keypress in this input
                    //             $(
                    //                     'input',
                    //                     $('.filters th').eq($(api.column(colIdx).header())
                    //                         .index())
                    //                 )
                    //                 .off('keyup change')
                    //                 .on('change', function(e) {
                    //                     // Get the search value
                    //                     $(this).attr('title', $(this).val());
                    //                     var regexr =
                    //                         '({search})'; //$(this).parents('th').find('select').val();

                    //                     var cursorPosition = this.selectionStart;
                    //                     // Search the column for that value
                    //                     api
                    //                         .column(colIdx)
                    //                         .search(
                    //                             this.value != '' ?
                    //                             regexr.replace('{search}', '(((' + this
                    //                                 .value + ')))') :
                    //                             '',
                    //                             this.value != '',
                    //                             this.value == ''
                    //                         )
                    //                         .draw();
                    //                 })
                    //                 .on('keyup', function(e) {
                    //                     e.stopPropagation();

                    //                     $(this).trigger('change');
                    //                     $(this)
                    //                         .focus()[0]
                    //                         .setSelectionRange(cursorPosition,
                    //                             cursorPosition);
                    //                 });


                    //         });
                    // },
                    columnDefs: [{
                            "targets": [0],
                            "visible": false,
                            "searchable": false
                        },

                        {
                            targets: [1],
                            className: "canFilter",
                        },
                        {
                            targets: [2],
                            className: "canFilter",
                        },
                        {
                            targets: [3],
                            "visible": false,
                        },
                        {
                            targets: [4],
                            className: "canFilter",
                        },
                        {
                            orderable: false,
                            targets: [5]
                        }
                    ]
                });

                table.columns().iterator('column', function(ctx, idx) {
                    $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
                });

                //filter the documents
                // table.columns(2).search( 'tesd 1' ).draw();
            }
        });
    }


    function fetchAllArchive(filter='') {

        

        $.ajax({
            // url: "{{ route('fetchArchive', $filter) }}",
            url: "{{ route('fetchArchive') }}",
            method: 'get',
            success: function(response) {

                $(".overdue-pill").text(response.overdue);
                $(".duetoday-pill").text(response.duetoday);

                $("#show_archive_documents").html(response.content);
                var table = $('#show_archive_documents #documentTable').DataTable({
                    "order": [
                        [0, "desc"]
                    ],
                    columnDefs: [{
                            "targets": [0],
                            "visible": false,
                            "searchable": false
                        },

                        {
                            targets: [1],
                            className: "canFilter",
                        },
                        {
                            targets: [2],
                            className: "canFilter",
                        },
                        {
                            targets: [3],
                            "visible": false,
                        },
                        {
                            targets: [4],
                            className: "canFilter",
                        },
                        {
                            orderable: false,
                            targets: [5]
                        }
                    ]
                });

                table.columns().iterator('column', function(ctx, idx) {
                    $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
                });
            }
        });
    }

    function fetchAllForSignature() {

        $.ajax({
            url: "{{ route('forSignatureFetch', $division) }}",
            method: 'get',
            success: function(response) {

                $(".overdue-pill").text(response.overdue);
                $(".duetoday-pill").text(response.duetoday);

                $("#show_archive_documents").html(response.content);
                var table = $('#show_archive_documents #documentTable').DataTable({
                    "order": [
                        [0, "desc"]
                    ],
                    columnDefs: [{
                            "targets": [0],
                            "visible": false,
                            "searchable": false
                        },

                        {
                            "targets": [3],
                            "visible": false,
                        },
                        {
                            orderable: false,
                            targets: [5]
                        }
                    ]
                });

                table.columns().iterator('column', function(ctx, idx) {
                    $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
                });
            }
        });
    }


    function fetchAllOverdues(due_type) {
        var operator;

        // let str = '{{ route('fetchAll.overdue', ['division_id' => $division, 'due_type' => ':operator']) }}';
        let url = '{{ route('fetchAll.overdue') }}';
        // let url = str.replace(/:operator/g, operator);

        $.ajax({
            url: url,
            data: {
                division_id: {{ $division }},
                due_type: due_type
            },
            method: 'get',
            success: function(response) {

                $(".overdue-pill").text(response.overdue);
                $(".duetoday-pill").text(response.duetoday);

                $("#show_overdue_documents").html(response.content);
                var table = $('#show_overdue_documents #documentTable').DataTable({
                    "order": [
                        [0, "desc"]
                    ],
                    columnDefs: [{
                            "targets": [0],
                            "visible": false,
                            "searchable": false
                        },

                        {
                            "targets": [3],
                            "visible": false,
                        },
                        {
                            orderable: false,
                            targets: [5]
                        }
                    ]
                });

                table.columns().iterator('column', function(ctx, idx) {
                    $(table.column(idx).header()).prepend('<span class="sort-icon"/>');
                });
            }
        });
    }
</script>
