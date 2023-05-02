<div class="modal fade" id="editMasterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            <form method="post"  autocomplete="off" class="form-horizontal" id="editMasterForm">
                <div class="modal-body">
                    {{-- ------------------------------------------------------------- --}}

                @csrf
                @method('put')
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
                        <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                        <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    id="input-name" type="text" placeholder="{{ __('Name') }}" required="true"
                                    aria-required="true" />
                                @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger"
                                        for="input-name">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Short name') }}</label>
                        <div class="col-sm-7">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="short_name"
                                    id="input-name" type="text" placeholder="{{ __('Name') }}" required="true"
                                    aria-required="true" />

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ __('Save xxxxxxxxxxxxxxxx') }}</button>
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
