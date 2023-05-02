
<div class="form-group {{ $errors->has('doc_number') ? 'has-error' : '' }}">
    <label for="doc_number" class="col-md-2 control-label">Doc Number</label>
    <div class="col-md-10">
        <textarea class="form-control" name="doc_number" cols="50" rows="10" id="doc_number" placeholder="Enter doc number here...">{{ old('doc_number', optional($document)->doc_number) }}</textarea>
        {!! $errors->first('doc_number', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('origin_id') ? 'has-error' : '' }}">
    <label for="origin_id" class="col-md-2 control-label">Origin</label>
    <div class="col-md-10">
        <select class="form-control" id="origin_id" name="origin_id" required="true">
        	    <option value="" style="display: none;" {{ old('origin_id', optional($document)->origin_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select origin</option>
        	@foreach ($OriginOffices as $key => $OriginOffice)
			    <option value="{{ $key }}" {{ old('origin_id', optional($document)->origin_id) == $key ? 'selected' : '' }}>
			    	{{ $OriginOffice }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('origin_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('mor_id') ? 'has-error' : '' }}">
    <label for="mor_id" class="col-md-2 control-label">Mor</label>
    <div class="col-md-10">
        <select class="form-control" id="mor_id" name="mor_id" required="true">
        	    <option value="" style="display: none;" {{ old('mor_id', optional($document)->mor_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select mor</option>
        	@foreach ($MeansOfReceivings as $key => $MeansOfReceiving)
			    <option value="{{ $key }}" {{ old('mor_id', optional($document)->mor_id) == $key ? 'selected' : '' }}>
			    	{{ $MeansOfReceiving }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('mor_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('doctype_id') ? 'has-error' : '' }}">
    <label for="doctype_id" class="col-md-2 control-label">Doctype</label>
    <div class="col-md-10">
        <select class="form-control" id="doctype_id" name="doctype_id" required="true">
        	    <option value="" style="display: none;" {{ old('doctype_id', optional($document)->doctype_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select doctype</option>
        	@foreach ($DocTypes as $key => $DocType)
			    <option value="{{ $key }}" {{ old('doctype_id', optional($document)->doctype_id) == $key ? 'selected' : '' }}>
			    	{{ $DocType }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('doctype_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
    <label for="user_id" class="col-md-2 control-label">User</label>
    <div class="col-md-10">
        <select class="form-control" id="user_id" name="user_id" required="true">
        	    <option value="" style="display: none;" {{ old('user_id', optional($document)->user_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select user</option>
        	@foreach ($Users as $key => $User)
			    <option value="{{ $key }}" {{ old('user_id', optional($document)->user_id) == $key ? 'selected' : '' }}>
			    	{{ $User }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date_received') ? 'has-error' : '' }}">
    <label for="date_received" class="col-md-2 control-label">Date Received</label>
    <div class="col-md-10">
        <input class="form-control" name="date_received" type="text" id="date_received" value="{{ old('date_received', optional($document)->date_received) }}" minlength="1" maxlength="255" required="true" placeholder="Enter date received here...">
        {!! $errors->first('date_received', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
    <label for="status" class="col-md-2 control-label">Status</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="status_1">
            	<input id="status_1" class="" name="status" type="checkbox" value="1" {{ old('status', optional($document)->status) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
    <label for="subject" class="col-md-2 control-label">Subject</label>
    <div class="col-md-10">
        <textarea class="form-control" name="subject" cols="50" rows="10" id="subject" required="true" placeholder="Enter subject here...">{{ old('subject', optional($document)->subject) }}</textarea>
        {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('deadline') ? 'has-error' : '' }}">
    <label for="deadline" class="col-md-2 control-label">Deadline</label>
    <div class="col-md-10">
        <input class="form-control" name="deadline" type="text" id="deadline" value="{{ old('deadline', optional($document)->deadline) }}" maxlength="255" placeholder="Enter deadline here...">
        {!! $errors->first('deadline', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('required_action') ? 'has-error' : '' }}">
    <label for="required_action" class="col-md-2 control-label">Required Action</label>
    <div class="col-md-10">
        <textarea class="form-control" name="required_action" cols="50" rows="10" id="required_action" placeholder="Enter required action here...">{{ old('required_action', optional($document)->required_action) }}</textarea>
        {!! $errors->first('required_action', '<p class="help-block">:message</p>') !!}
    </div>
</div>

