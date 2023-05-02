{{-- update Document modal start --}}
<div class="modal fade" id="attachDocumentModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title">Attach Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('attach.doc') }}" method="post" name="edit_document_form"
                    id="edit_document_form" enctype="multipart/form-data" class="dropzoneForm">
                    @csrf
                    @method('put')
                    <input type="hidden" class="document_id" name="document_id" id="document_id" value="">
                    <input type="hidden" name="is_attachment" id="is_attachment" value="1">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" name="id">

                                    <div class="dz-default dz-message dropzoneDragArea dropzone-previews dropzone">
                                    </div>
                                    <button type="submit" id="updateDocument"
                                        class="btn btn-success float-left">Update</button>
                                    <button type="button" class="btn btn-secondary float-right"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                {{-- <button class="btn btn-success btn-submit" id="updateDocument">Submit</button> --}}
            </div>
        </div>
    </div>
</div>
{{-- add new Ducoment modal end --}}
@push('footer')
    {{-- @include('scripts.documents_crud') --}}
    @include('scripts.dropzone')
    
@endpush

@push('js')
    <script>
        // dropzone("dropzoneDragAreaAttachment");

    </script>
@endpush
