
<div class="form-group {{ $errors->has('log_name') ? 'has-error' : '' }}">
    <label for="log_name" class="col-md-2 control-label">Log Name</label>
    <div class="col-md-10">
        <input class="form-control" name="log_name" type="text" id="log_name" value="{{ old('log_name', optional($activityLog)->log_name) }}" maxlength="255" placeholder="Enter log name here...">
        {!! $errors->first('log_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">Description</label>
    <div class="col-md-10">
        <textarea class="form-control" name="description" cols="50" rows="10" id="description" required="true">{{ old('description', optional($activityLog)->description) }}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('subject_type') ? 'has-error' : '' }}">
    <label for="subject_type" class="col-md-2 control-label">Subject Type</label>
    <div class="col-md-10">
        <input class="form-control" name="subject_type" type="text" id="subject_type" value="{{ old('subject_type', optional($activityLog)->subject_type) }}" maxlength="255" placeholder="Enter subject type here...">
        {!! $errors->first('subject_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('event') ? 'has-error' : '' }}">
    <label for="event" class="col-md-2 control-label">Event</label>
    <div class="col-md-10">
        <input class="form-control" name="event" type="text" id="event" value="{{ old('event', optional($activityLog)->event) }}" maxlength="255" placeholder="Enter event here...">
        {!! $errors->first('event', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('subject_id') ? 'has-error' : '' }}">
    <label for="subject_id" class="col-md-2 control-label">Subject</label>
    <div class="col-md-10">
        <select class="form-control" id="subject_id" name="subject_id">
        	    <option value="" style="display: none;" {{ old('subject_id', optional($activityLog)->subject_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select subject</option>
        	@foreach ($subjects as $key => $subject)
			    <option value="{{ $key }}" {{ old('subject_id', optional($activityLog)->subject_id) == $key ? 'selected' : '' }}>
			    	{{ $subject }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('subject_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('causer_type') ? 'has-error' : '' }}">
    <label for="causer_type" class="col-md-2 control-label">Causer Type</label>
    <div class="col-md-10">
        <input class="form-control" name="causer_type" type="text" id="causer_type" value="{{ old('causer_type', optional($activityLog)->causer_type) }}" maxlength="255" placeholder="Enter causer type here...">
        {!! $errors->first('causer_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('causer_id') ? 'has-error' : '' }}">
    <label for="causer_id" class="col-md-2 control-label">Causer</label>
    <div class="col-md-10">
        <select class="form-control" id="causer_id" name="causer_id">
        	    <option value="" style="display: none;" {{ old('causer_id', optional($activityLog)->causer_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select causer</option>
        	@foreach ($causers as $key => $causer)
			    <option value="{{ $key }}" {{ old('causer_id', optional($activityLog)->causer_id) == $key ? 'selected' : '' }}>
			    	{{ $causer }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('causer_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('properties') ? 'has-error' : '' }}">
    <label for="properties" class="col-md-2 control-label">Properties</label>
    <div class="col-md-10">
        <input class="form-control" name="properties" type="text" id="properties" value="{{ old('properties', optional($activityLog)->properties) }}" maxlength="4294967295" placeholder="Enter properties here...">
        {!! $errors->first('properties', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('batch_uuid') ? 'has-error' : '' }}">
    <label for="batch_uuid" class="col-md-2 control-label">Batch Uuid</label>
    <div class="col-md-10">
        <input class="form-control" name="batch_uuid" type="text" id="batch_uuid" value="{{ old('batch_uuid', optional($activityLog)->batch_uuid) }}" maxlength="36" placeholder="Enter batch uuid here...">
        {!! $errors->first('batch_uuid', '<p class="help-block">:message</p>') !!}
    </div>
</div>

