<div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog small" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title"> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form method="post" action="{{ route('origin-offices.update', $origin_office->id) }}" autocomplete="off" class="form-horizontal"> --}}
            <form method="post" action="{{ route('employees.store') }}" autocomplete="off" class="form-horizontal"
                id="addEmployeeForm" name="Employee">

                @csrf
                @method('post')
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
                        <label class="col-sm-3 col-form-label">{{ __('Firstname') }}</label>
                        <div class="col">
                            <div class="form-group{{ $errors->has('firstname') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                    name="firstname" id="firstname" type="text" placeholder="{{ __('Firstname') }}"
                                    required="true" aria-required="true" />
                                @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger"
                                        for="firstname">{{ $errors->first('firstname') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Lastname') }}</label>
                        <div class="col">
                            <div class="form-group{{ $errors->has('lastname') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                    name="lastname" id="lastname" type="text" placeholder="{{ __('Lastname') }}"
                                    required="true" aria-required="true" />
                                @if ($errors->has('lastname'))
                                    <span id="name-error" class="error text-danger"
                                        for="lastname">{{ $errors->first('lastname') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Designation') }}</label>
                        <div class="col">
                            <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}"
                                    name="designation" id="designation" type="text"
                                    placeholder="{{ __('Designation') }}" required="true" aria-required="true" />
                                @if ($errors->has('designation'))
                                    <span id="designation" class="error text-danger"
                                        for="designation">{{ $errors->first('designation') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label">{{ __('Division') }}</label>
                        <div class="col">
                            <div class="form-group{{ $errors->has('division') ? ' has-danger' : '' }}">
                                <label for="division">{{ __('Division') }}</label>
                                <select multiple class="form-control" id="division_list" name="division_id">
                                </select>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
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
                $('#division_list')
                    .find('option')
                    .remove()
                    .end();

                // ------------------ load divisions ----------------------------------------------                
                $.ajax({
                    url: "{{ route('list.divisions') }}",
                    method: 'get',
                    success: function(response) {

                        $.each(response.list, function(index, value) {
                            $('#addEmployeeForm #division_list').append($('<option/>', {
                                value: value.id,
                                text: value.name
                            }));
                        });
                    }
                });
            });


        });
    </script>
@endpush
