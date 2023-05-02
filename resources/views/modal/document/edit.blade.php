{{-- update Document modal start --}}
<div class="modal fade" id="editDocumentModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true" >
    <div class="modal-dialog" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title">Update Document</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('update.doc') }}" method="POST" name="edit_document_form"
                    id="edit_document_form" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col">
                            <div class="row">

                                @role(['superadmin'])
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="date_received">{{ __('Date Received') }}</label>
                                            <input type="text" id="date_received" name="date_received"
                                                class="form-control datepicker" placeholder="{{ __('Date Received') }}"
                                                required="true" aria-required="true">
                                        </div>
                                    </div>
                                @else
                                    <input type="hidden" id="date_received" name="date_received"
                                        class="form-control datepicker" placeholder="{{ __('Date Received') }}"
                                        required="true" aria-required="true">
                                @endrole



                                <div class="col d-flex deadline-wrap">
                                    <label for="date_received">Deadline</label>

                                    <div class="material-switch">
                                        <input id="switch-primary_edit" name="switch-primary_edit" type="checkbox"
                                            value="off">
                                        <label for="switch-primary_edit" class="primary-color"></label>
                                    </div>

                                    <div class="form-group" style="display: none;" id="wrap-date_received">
                                        <input type="text" id="deadline" name="deadline"
                                            class="form-control datepicker" placeholder="{{ __('Deadline') }}"
                                            required="true" aria-required="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            </div>

                            <div class="row">
                                <div class="col ">
                                    <div class="form-group">
                                        <label for="doctype">Document Type </label>
                                        <select name="doctype_id" id="doctype_id" class="form-control selectpicker" data-live-search="true"  title="No one selected">
                                            @foreach ($docTypes as $docType)
                                            <option value="{{ $docType->id }}">{{ $docType->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="subject"> {{ __('Subject') }}</label>
                                        <input class="form-control" name="subject" id="subject" type="text"
                                            placeholder="{{ __('Subject') }}" required="true" aria-required="true" />
                                        <input type="hidden" name="id">
                                        @if ($errors->has('subject'))
                                            <span id="name-error" class="error text-danger"
                                                for="input-name">{{ $errors->first('subject') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="origin_id"> {{ __('Origin Office') }}</label>
                                        <select name="origin_id" id="origin_id" class="form-control selectpicker" data-live-search="true"  title="No one selected">
                                            @foreach ($origin_offices as $origin_office)
                                            <option value="{{ $origin_office->id }}">{{ $origin_office->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="mor"> {{ __('Means of Receiving') }}</label>
                                        <select name="mor_id" id="mor_id" class="form-control selectpicker" data-live-search="true"  title="No one selected">
                                            @foreach ($mors as $mor)
                                            <option value="{{ $mor->id }}">{{ $mor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
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
@push('js')
    <script>
        Dropzone.autoDiscover = false;
        // Dropzone.options.docform = false;
        let token = $('meta[name="csrf-token"]').attr('content');
        $(function() {});

        $('#switch-primary_edit').on('click', function() {
            var val = ($(this).val() == "off") ? "on" : "off";
            $(this).val(val);
            $('#editDocumentModal #wrap-date_received').toggle();
        });
    </script>
@endpush
