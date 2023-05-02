<div class="modal fade" id="usersAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                            <div class="form-group{{ $errors->has('designation') ? ' has-danger' : '' }}">
                                <label for="designation">{{ __('Designation') }}</label>
                                <input class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation"
                                    id="designation" type="text" placeholder="{{ __('Designation') }}" required="true"
                                    aria-required="true" />
                                @if ($errors->has('designation'))
                                    <span id="designation-error" class="error text-danger"
                                        for="input-designation">{{ $errors->first('designation') }}</span>
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
                            <div class="form-group{{ $errors->has('office') ? ' has-danger' : '' }} bmd-form-group">
                                <label for="office_id" class="bmd-label-static">{{ __('Office') }}</label>
                                {{-- <select class="form-control offices" name="office_id" id="office_id"> --}}

                                @role('superadmin')
                                <select name="office_id" id="office_id" class="form-control selectpicker" data-live-search="true" title="No one selected">
                                    @foreach ($offices as $office)
                                    <option value="{{ $office->id }}">{{ $office->short_name }}</option>
                                    @endforeach
                                </select>

                                @else
                                    <input type="hidden" name="office_id" id="office_id" value="{{ Auth::user()->office_id }}" >
                                    <input type="text" class="form-control" value="{{ Auth::user()->office->name }}" disabled >
                                @endrole    

                                @if ($errors->has('office'))
                                    <span id="name-error" class="error text-danger"
                                        for="office_id">{{ $errors->first('office_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('division') ? ' has-danger' : '' }} bmd-form-group">
                                <label for="division_id" class="bmd-label-static">{{ __('Division') }}</label>
                                {{-- <select class="form-control divisions" name="division_id" id="division_id"> --}}

                                @role('superadmin')
                                <select name="division_id" id="division_id" class="form-control selectpicker" data-live-search="true" title="No one selected">
                                    @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>

                                @else
                                    <input type="hidden" name="division_id" id="division_id" value="{{ Auth::user()->division_id }}" >
                                    <input type="text" class="form-control" value="{{ Auth::user()->division->name }}" disabled >
                                @endrole    

                                @if ($errors->has('division'))
                                    <span id="name-error" class="error text-danger"
                                        for="division_id">{{ $errors->first('division_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('role') ? ' has-danger' : '' }} bmd-form-group">
                                <label for="role_id" class="bmd-label-static">{{ __('Role') }}</label>

                                @role('superadmin')
                                <select name="role_id" id="role_id" class="form-control selectpicker" data-live-search="true" title="No one selected">
                                    @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>

                                @else
                                    {{-- <input type="hidden" name="role_id" id="role_id" value="2" > --}}
                                    <input type="text" class="form-control" value="{{ $roles[1]->name }}" disabled >
                                @endrole                                



                                @if ($errors->has('role'))
                                    <span id="name-error" class="error text-danger"
                                        for="role_id">{{ $errors->first('role_id') }}</span>
                                @endif
                            </div>
                        </div>
                    </div> 

                </div>
                <div class="modal-footer">
                    <button type="submit" id="addUser" class="btn btn-success float-left">Update</button>
                    <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
                </div>
            </form>
            {{-- --------------------------------------------------------------- --}}

        </div>
    </div>
</div>
