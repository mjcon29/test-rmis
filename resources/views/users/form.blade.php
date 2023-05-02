
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">Name</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($user)->name) }}" minlength="1" maxlength="255" required="true" placeholder="Enter name here...">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="col-md-2 control-label">Email</label>
    <div class="col-md-10">
        <input class="form-control" name="email" type="text" id="email" value="{{ old('email', optional($user)->email) }}" minlength="1" maxlength="255" required="true" placeholder="Enter email here...">
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
    <label for="username" class="col-md-2 control-label">Username</label>
    <div class="col-md-10">
        <input class="form-control" name="username" type="text" id="username" value="{{ old('username', optional($user)->username) }}" maxlength="255" placeholder="Enter username here...">
        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email_verified_at') ? 'has-error' : '' }}">
    <label for="email_verified_at" class="col-md-2 control-label">Email Verified At</label>
    <div class="col-md-10">
        <input class="form-control" name="email_verified_at" type="text" id="email_verified_at" value="{{ old('email_verified_at', optional($user)->email_verified_at) }}" placeholder="Enter email verified at here...">
        {!! $errors->first('email_verified_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="col-md-2 control-label">Password</label>
    <div class="col-md-10">
        <input class="form-control" name="password" type="text" id="password" value="{{ old('password', optional($user)->password) }}" minlength="1" maxlength="255" required="true" placeholder="Enter password here...">
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('remember_token') ? 'has-error' : '' }}">
    <label for="remember_token" class="col-md-2 control-label">Remember Token</label>
    <div class="col-md-10">
        <input class="form-control" name="remember_token" type="text" id="remember_token" value="{{ old('remember_token', optional($user)->remember_token) }}" maxlength="100" placeholder="Enter remember token here...">
        {!! $errors->first('remember_token', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('division_id') ? 'has-error' : '' }}">
    <label for="division_id" class="col-md-2 control-label">Division</label>
    <div class="col-md-10">
        <select class="form-control" id="division_id" name="division_id" required="true">
        	    <option value="" style="display: none;" {{ old('division_id', optional($user)->division_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select division</option>
        	@foreach ($Divisions as $key => $Division)
			    <option value="{{ $key }}" {{ old('division_id', optional($user)->division_id) == $key ? 'selected' : '' }}>
			    	{{ $Division }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('division_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

