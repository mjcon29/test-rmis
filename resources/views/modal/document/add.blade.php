{{-- add new Document modal start from git --}}

<div class="modal fade" id="addDocumentModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title">{{ __('ADD Document') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form method="post" name="docform" id="docform" action="{{ route('storeAjax') }}"
                    enctype="multipart/form-data" autocomplete="off" class="dropzoneForm">
                    @csrf
                    {{-- <input type="hidden" name="status" value="0"> --}}
                    <input type="hidden" name="user_id" value="{{ __(Auth::id()) }}">
                    <input type="hidden" class="document_id" name="document_id" id="document_id" value="">
                    <input type="hidden" name="is_confidential" id="is_confidential" >
                    <div class="row">
                        <div class="col">
                            <div class="row">

                                @role(['superadmin'])
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="date_received">{{ __('Date Received') }}</label>
                                            <input type="text" id="date_received_add" name="date_received"
                                                class="form-control datepicker" placeholder="{{ __('Date Received') }}"
                                                required="true" aria-required="true">
                                        </div>
                                    </div>
                                @else
                                    <input type="hidden" id="date_received_add" name="date_received"
                                        class="form-control datepicker" placeholder="{{ __('Date Received') }}"
                                        required="true" aria-required="true">
                                @endrole

                                <div class="col d-flex deadline-wrap">
                                    <label for="date_received">Deadline</label>

                                    <div class="material-switch">
                                        <input id="switch-primary_add" name="switch-primary_add" type="checkbox"
                                            value="off">
                                        <label for="switch-primary_add" class="primary-color"></label>
                                    </div>

                                    <div class="form-group" style="display: none;" id="wrap-date_received">
                                        <input type="text" id="deadline_add" name="deadline"
                                            class="form-control datepicker" placeholder="{{ __('Deadline') }}"
                                            required="true" aria-required="true">
                                    </div>
                                </div>

                                {{-- <div class="col d-flex ">
                                    <button class="locked text-danger ml-auto p-2 btn-dark">
                                        <span class="lock_text"> Confidential</span>
                                        <i class="material-icons animate__animated animate__infinite animate__swing">lock_open</i>
                                    </button>
                                </div> --}}
                            </div>

                            <div class="row doctype_section">
                                <div class="col ">
                                    <div class="form-group">
                                        <label for="doctype">Document Type</label>
                                        {{-- <input placeholder="Document Type" data-db="doctype" type="text"
                                            id="doctype_id" name="doctype" class="form-control autocomp" placeholder=""
                                            required="true" aria-required="true">
                                        <input type="hidden" name="doctype_id"> --}}

                                        <select name="doctype_id" id="doctype_id" class="form-control selectpicker" data-live-search="true"  title="No one selected">
                                            @foreach ($docTypes as $docType)
                                            <option value="{{ $docType->id }}">{{ $docType->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                </div>

                                {{-- <div class="col">
                                    <div class="form-group">
                                        <label for="doctype"># memo number</label>
                                        <input type="text" id="doc_number" name="doc_number" class="form-control"
                                            value="">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col ">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input placeholder="Document Subject" type="text" id="subject"
                                            name="subject" class="form-control" placeholder="" required="true"
                                            aria-required="true">
                                    </div>

                                </div>
                            </div>


                            <div class="row">
                                @role(['records'])
                                <div class="col">
                                    <div class="form-group">
                                        <label for="origin">Origin Office</label>

                                        <select name="origin_id" id="origin_id" class="form-control selectpicker" data-live-search="true"  title="No one selected">
                                            @foreach ($origin_offices as $origin_office)
                                            <option value="{{ $origin_office->id }}">{{ $origin_office->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="mor">Means of Receiving</label>

                                        @role(['records'])
                                       
                                        <select name="mor_id" id="mor_id" class="form-control selectpicker" data-live-search="true"  title="No one selected">
                                            @foreach ($mors as $mor)
                                            <option value="{{ $mor->id }}">{{ $mor->name }}</option>
                                            @endforeach
                                        </select>
                                        @else
                                        <input placeholder="{{ __('e.g. Email, Hard...') }}" data-db="mor"
                                        type="text" id="mor_id" name="mor"
                                        class="form-control autocomp" required="true" aria-required="true">
                                        <input type="hidden" name="mor_id">
                                        @endrole
                                    </div>

                                </div>
                                @else
                                <div class="col">
                                    <div class="form-group">
                                        <label for="origin">Origin Office</label>

                                        <input placeholder="Origin Office of the Document" data-db="OriginOffice"
                                            type="text" id="origin_id" name="origin"
                                            class="form-control" value="{{ Auth::user()->division->name }}" disabled>
                                        <input type="hidden" name="origin_id" value="{{ Auth::user()->office->id }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="mor">Means of Receiving</label>

                                        @role(['records'])
                                        <input placeholder="{{ __('e.g. Email, Hard...') }}" data-db="mor"
                                            type="text" id="mor_id" name="mor"
                                            class="form-control autocomp" required="true" aria-required="true">
                                        <input type="hidden" name="mor_id">

                                        @else
                                        <input placeholder="{{ __('e.g. Email, Hard...') }}" data-db="mor"
                                        type="text" id="mor_id" name="mor"
                                        class="form-control" value="Internal" disabled>
                                        <input type="hidden" name="mor_id" value="3">

                                        {{-- <select name="mor_id" id="mor_id" class="form-control selectpicker" data-live-search="true"  title="No one selected" disabled>
                                            <option value="3" selected>Internal</option>
                                        </select> --}}


                                        @endrole
                                    </div>

                                </div>
                                @endrole
                                


                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="material-switch">
                                        <input id="switch_confidential" name="switch_confidential" type="checkbox"
                                            value="off">
                                        <label for="switch_confidential" class="danger-color"></label> &nbsp; <span class="text-danger font-weight-bold letter-spacing-5"><b>Confidential</b></span>
                                    </div>
                                </div>
                            </div>
                            @role(['records'])

                            @else
                            <div class="row">
                                <div class="col">
                                    <div class="form-group info">
                                        <label for="RouteUser" class="bmd-label-static"> {{ __('Assign to:') }}</label>
                                        <select name="RouteUser[]" id="RouteUser" class="form-control selectpicker" data-live-search="true"  multiple title="No one selected">
                                            @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group action">
                                        <label for="RouteAction" class="form-label">Action</label>
                                        <select name="RouteAction[]" id="RouteAction" class="form-control selectpicker" data-live-search="true"  multiple title="No one selected">
                                            @foreach ($actions as $action)
                                            <option value="{{ $action->id }}">{{ $action->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>      
                            @endrole                      
                            <div class="row">

                                <div class="col">
                                    <div id="dropzoneDragArea"
                                        class="dz-default dz-message dropzoneDragArea dropzone-previews dropzone">
                                    </div>
                                    <button type="submit" id="createDoc" class="btn btn-md btn-primary float-left">create</button>
                                    <button type="button" class="btn btn-secondary float-right"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
{{-- add new Ducoment modal end --}}

@push('js')
    <script>
        Dropzone.autoDiscover = false;
        $('#addDocumentModal #switch-primary_add').on('click', function() {
            var val = ($(this).val() == "off") ? "on" : "off";
            $(this).val(val);
            $('#addDocumentModal #wrap-date_received').toggle();
        });
    </script>
@endpush
