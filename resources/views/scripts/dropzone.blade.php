<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }

    });

    Dropzone.autoDiscover = false;

    function dropzone_box(btn) {
  
        
        if (Dropzone.instances.length > 0) Dropzone.instances.forEach(dz => dz.destroy());
        let token = $('meta[name="csrf-token"]').attr('content');
        let modal_id = $(btn).data('target');

        let id = $(btn).attr('id');

        let is_attachment = $(modal_id + " form #is_attachment").val();
        let switch_confidential = $(modal_id + " form #switch_confidential").val();

        if (id !== "addDocument") {

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
            acceptedFiles: ".pdf",
            maxFiles: 10,
            maxFilesize: 50,
            params: {
                _token: token
            },
            // The setting up of the dropzone
            init: function() {
                
                var myDropzone = this;

                //form submission code goes here
                $(modal_id + " form").submit(function(event) {
                    //Make sure that the form isn't actully being sent.
                    event.preventDefault();

                    $(modal_id).toggle();

                    URL = $(modal_id + " form").attr('action');

                    $("input[name=control_number]").val("");

                    formData = $(modal_id + " form").serialize();
                    // $('#RouteUser.selectpicker').selectpicker('val');
                    users = $(modal_id + " form " + '#RouteUser').val();

                    console.log(formData);
                    

                    $("button[type='submit']").text('Updating...');

                    // $( '#docform' ).each(function(){
                    //                 this.reset();
                    //             });

                    $.ajax({
                        type: 'POST',
                        url: URL,
                        // data: {formData,users},
                        data: formData,
                        success: function(result) {
                            if (result.status == "success") {
                                // fetch the useid
                                var document_id = result.document_id;
                                $("#document_id").val(
                                    document_id
                                );
                                // $("#is_confidential").val($(modal_id + " form #switch_confidential").is(":checked"));                                
                                // inseting document_id into hidden input field
                                //process the queue


                                if (myDropzone.getQueuedFiles().length === 0) {

                                    Swal.fire(
                                        'Added!',
                                        'PDF Added Successfully!',
                                        'success'
                                    ).then(function() {
                                        // window.location.href =
                                        //     "{{ URL::to('/') }}";

                                            window.location.href = "{{ URL::to(\Request::getRequestUri()) }}";
                                    });
                                } else {

                                    myDropzone.processQueue();

                                }

                                // reset form
                                

                            } else {
                                console.log("error");
                            }
                        }
                    });
                });

                //Gets triggered when we submit the image.
                this.on('sending', function(file, xhr, formData) {

                    if($(modal_id + " form #switch_confidential").is(":checked")){

                    }

                    let document_id = document.getElementById('document_id').value;
                    formData.append('document_id', document_id);
                    formData.append('is_confidential', $(modal_id + " form #switch_confidential").is(":checked"));
                    if (typeof is_attachment !== 'undefined' && is_attachment !== false) {
                        formData.append('is_attachment', is_attachment);
                    }

                });
                this.on("success", function(file, response) {

                    Swal.fire(
                        'Added!',
                        'PDF Added Successfully!',
                        'success'
                    ).then(function() {
                        
                        // window.location.href = "{{ URL::to('/') }}";
                        window.location.href = "{{ URL::to(\Request::getRequestUri()) }}";
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

    $(document).on('click', '.attachIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let modal_id = $(this).data('target');

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
                $(modal_id + " input[name='id'").val(id);
                for (let x in response[0]) {

                    var el = document.querySelector('#updateDocument');
                    el.setAttribute('data-id', id);


                    if (x.search("_id") < 0) $(modal_id + " #" + x).val(response[0][x]);
                    else {
                        name = x.replace('_id', '');

                        $(modal_id + " input[name='" + x + "'").val(response[0][x]);
                        $(modal_id + " #" + x).val(response[name]);
                    }
                }
            }
        });
    });
</script>
