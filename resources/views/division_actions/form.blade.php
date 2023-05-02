
<div class="form-group {{ $errors->has('division_id') ? 'has-error' : '' }}">
    <label for="division_id" class="col-md-2 control-label">Division</label>
    <div class="col-md-10">
        <select class="form-control" id="division_id" name="division_id" required="true">
        	    <option value="" style="display: none;" {{ old('division_id', optional($divisionAction)->division_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select division</option>
        	@foreach ($Divisions as $key => $Division)
			    <option value="{{ $key }}" {{ old('division_id', optional($divisionAction)->division_id) == $key ? 'selected' : '' }}>
			    	{{ $Division }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('division_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('action_id') ? 'has-error' : '' }}">
    <label for="action_id" class="col-md-2 control-label">Action</label>
    <div class="col-md-10">
        <select class="form-control" id="action_id" name="action_id" required="true">
        	    <option value="" style="display: none;" {{ old('action_id', optional($divisionAction)->action_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select action</option>
        	@foreach ($Actions as $key => $Action)
			    <option value="{{ $key }}" {{ old('action_id', optional($divisionAction)->action_id) == $key ? 'selected' : '' }}>
			    	{{ $Action }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('action_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

