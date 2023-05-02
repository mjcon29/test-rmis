<div class="modal fade" id="addMasterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog small" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title"> {{ __('Add Route') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST"  autocomplete="off" class="form-horizontal form-masterlist">
                <div class="modal-body">
                    {{-- ------------------------------------------------------------- --}}

                    @csrf
                    @method('post')
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

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-save">{{ __('Save') }}</button>
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
                $('.form-masterlist').attr('name', $(this).data("dbname"));
            });


        });
    </script>
@endpush
