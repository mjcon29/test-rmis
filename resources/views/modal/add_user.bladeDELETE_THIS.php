<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog small" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title">{{__("Add User")}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" autocomplete="off" class="form-horizontal" id="addUserForm">
                <div class="modal-body">

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
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label for="email">{{ __('Email') }}</label>
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" id="email" type="text" placeholder="{{ __('email') }}"
                                    required="true" aria-required="true" />
                                @if ($errors->has('email'))
                                    <span id="name-error" class="error text-danger"
                                        for="email">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label for="name">{{ __('Name') }}</label>
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    id="name" type="text" placeholder="{{ __('Name') }}" required="true"
                                    aria-required="true" />
                                @if ($errors->has('name'))
                                    <span id="name-error" class="error text-danger"
                                        for="input-name">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                <label for="username">{{ __('Username') }}</label>
                                <input class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                    name="username" id="username" type="text" placeholder="{{ __('Username') }}"
                                    required="true" aria-required="true" />
                                @if ($errors->has('username'))
                                    <span id="name-error" class="error text-danger"
                                        for="username">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }} bmd-form-group">
                                <label for="role" class="bmd-label-static">{{ __('Role') }}</label>
                                <select class="form-control roles" name="role_id" id="role_id"></select>
                                @if ($errors->has('role'))
                                    <span id="name-error" class="error text-danger"
                                        for="role">{{ $errors->first('role') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('division') ? ' has-danger' : '' }} bmd-form-group">
                                <label for="division_id" class="bmd-label-static">{{ __('division') }}</label>
                                <select class="form-control divisions" name="division_id" id="division_id"></select>
                                @if ($errors->has('division'))
                                    <span id="name-error" class="error text-danger"
                                        for="division_id">{{ $errors->first('division_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" id="addUser" class="btn btn-success float-left">Add</button>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                </div>
            </form>
            {{-- --------------------------------------------------------------- --}}

        </div>
    </div>
</div>
