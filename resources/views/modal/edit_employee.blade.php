<div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog small" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post"  autocomplete="off" class="form-horizontal" id="editEmployeeForm">
                @csrf
                @method('put')
                <div class="modal-body">

                    @if (session('status'))
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-label="Close">
                                        <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row">
                        <input type="hidden" id="id" name="id">
                        <label class="col-sm-3 col-form-label">{{ __('Fullname') }}</label>
                        <div class="col">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    id="name" type="text" placeholder="{{ __('name') }}" required="true"
                                    aria-required="true" />
                                @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger"
                                        for="name">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('division_id') }}</label>
                        <div class="col">
                            <div class="form-group{{ $errors->has('division_id') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('division_id') ? ' is-invalid' : '' }}" name="division_id"
                                    id="division_id" type="text" placeholder="{{ __('division_id') }}" required="true"
                                    aria-required="true" />
                                @if ($errors->has('division_id'))
                                    <span id="name-error" class="error text-danger"
                                        for="division_id">{{ $errors->first('division_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Designation') }}</label>
                        <div class="col">
                            <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation"
                                    id="designation" type="text" placeholder="{{ __('Designation') }}" required="true"
                                    aria-required="true" />
                                @if ($errors->has('designation'))
                                    <span id="designation" class="error text-danger"
                                        for="designation">{{ $errors->first('designation') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"><label for="division">{{ __('Division') }}</label></label>
                        <div class="col">
                            <div class="form-group{{ $errors->has('division') ? ' has-danger' : '' }}">
                                
                                <select multiple class="form-control" id="edit_division_list" name="division_id">
                                </select>
                            </div>
                        </div>
                    </div>                    


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="updateEmployee">{{ __('Save') }}</button>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                </div>
            </form>
            {{-- --------------------------------------------------------------- --}}

        </div>
    </div>
</div>


@push('js')
    <script>
        $(document).ready(function() {

            $('.btn-add').on('click', function() {
                $('.modal-title').html($(this).data("title"));
                $('.form-masterlist').attr('action', $(this).data("route"));
            });


        });
    </script>
@endpush
